<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Classes\ProductManager;
use App\Classes\CartManager;
use App\Classes\GuestUserManager;
use App\Classes\UserManager;
use App\Classes\AddressManager;
use App\Classes\ZoneManager;

use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    protected $productManager;
    protected $cartManager;
    protected $guestUserManager;
    protected $addressManager;
    protected $zoneManager;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        ProductManager $productManager,
        CartManager $cartManager,
        GuestUserManager $guestUserManager,
        AddressManager $addressManager,
        ZoneManager $zoneManager
    )
    {
        $this->productManager = $productManager;
        $this->cartManager = $cartManager;
        $this->guestUserManager = $guestUserManager;
        $this->addressManager = $addressManager;
        $this->zoneManager = $zoneManager;
    }
    
    /**
     * Cart List
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req) {
        $productList = $this->cartManager->getCartContain();
        $cartSubTotal = $this->cartManager->subTotal();
        if(!$productList->isEmpty()) {
            return view('frontend.cart',
                [
                    'products' => $productList,
                    'cartSubTotal' => $cartSubTotal,
                ]
            );
        } else {
            return view('frontend.empty-cart');
        }
    }
    public function buyNow(Request $req)
    {
        $productList['item'] = $this->productManager->getProductById($req->productId); //update to select limited.
        $productList['item']->qty = 1;
        
        session(['buynow' => $productList]);
        
        return redirect()->route('address.get',['buy-now']);
        
    }
    /**
     * Get Addresse List
     *
     * @return \Illuminate\Http\Response
     */
    public function getAddresses(Request $req) {
        
        if($req->session()->has('buynow') && isset($_GET['buy-now']))
        {
            $productList = $req->session()->get('buynow');
            $cartSubTotal = $productList['item']->price = $productList['item']->sale_price;
        }
        else
        {
            $productList = $this->cartManager->getCartContain();
            if($productList->isEmpty()) {
                return redirect('cart/');
            }
            $cartSubTotal = $this->cartManager->subTotal();
        }
        $isTemp = 0;
        $userId = 0;
        
        $shippingAddresses = [];
        $billingAddresses = [];
        $userData = [];

        if (Auth::check()) {
            $userId = Auth::user()->id;
            $userData = Auth::user();
            $shippingAddresses = $this->addressManager->getAddresses($userId, 1, $isTemp);
            $billingAddresses = $this->addressManager->getAddresses($userId, 2, $isTemp);
            $zone = ( $shippingAddresses) ? $this->zoneManager
                    ->getZoneByState($shippingAddresses->state ?? $billingAddresses->state) : '';
        } else {
            $isTemp = 1;
            $userId = $this->guestUserManager->getUserId();
            $shippingAddresses = $this->addressManager->getAddresses($userId, 1, $isTemp);
            $billingAddresses = $this->addressManager->getAddresses($userId, 2, $isTemp);
            $zone = ( $shippingAddresses) ? $this->zoneManager
                    ->getZoneByState($shippingAddresses->state ?? $billingAddresses->state) : '';
        }
        
        $states = $this->zoneManager->stateslist();
        
        $cartSubTotal = str_replace(",","", $cartSubTotal);
        $cartSubTotal = (float) $cartSubTotal;
        return view('frontend.address',
            [
                'shippingAddresses' => $shippingAddresses,
                'billingAddresses' => $billingAddresses,
                'userId' => $userId,
                'isTemp' => $isTemp,
                'productList' => $productList,
                'cartSubTotal' => (float) $cartSubTotal,
                'userData' => $userData,
                'states' => $states,
                'zone' => $zone
            ]
        );
    }
    
    /**
     * add Address pass Address Id to checkout
     * @param Request $req
     * @return view checkout
     */
    public function addAddress(Request $req) {
        
        $isTemp = 0;
        $userId = 0;
        $bill = 0;
        $ship = 0;
        
        /* User check */
        if (Auth::check()) {
            $userId = Auth::user()->id;
        } else {
            /* Guest User */
            $isTemp = 1;
            $userId = $this->guestUserManager->getUserId();
        }
        
        /* Billing Address */
        if (!isset($req->billing_address) || ($req->isNewAddress == 1)) {
            $billingAddress= [
                'name'=>$req->bill_name,
                'mobile'=>$req->bill_phone,
                'email'=>$req->bill_email,
                'address'=>$req->bill_address,
                'city'=>$req->bill_city,
                'state'=>$req->bill_state,
                'zipcode'=>$req->bill_zipcode,
                'user_id'=>$userId,
                'type'=>2,
                'temp_user'=>$isTemp,
            ];
        $bill = AddressManager::add($billingAddress);
        $bill = $bill['id'];
        } else {
            $bill = $req->billing_address;
        }
        
        if ($isTemp == 1) {
            UserManager::updateTempUser(
                $userId,
                $req->bill_name ?? $this->addressManager->getAddressesbyId($req->billing_address)->name
                //$req->bill_email,
                //$req->bill_phone
            );
        }
        /* Shipping Address */
        //if (!isset($req->shipping_address)) {
        if (!isset($req->billing_address) || ($req->isNewAddress == 1)) {
            $shippingAddress=[
                'name'=>$req->ship_name ?? $req->bill_name,
                'mobile'=>$req->ship_phone ?? $req->bill_phone,
                'address'=>$req->ship_address ?? $req->bill_address,
                'email'=>$req->ship_email ?? $req->bill_email,
                'city'=>$req->ship_city ?? $req->bill_city,
                'state'=>$req->ship_state ?? $req->bill_state,
                'zipcode'=>$req->ship_zipcode ?? $req->bill_zipcode,
                'user_id'=>$userId,
                'type'=>1,
                'temp_user'=>$isTemp,
            ];
        $ship = AddressManager::add($shippingAddress);
        $ship = $ship['id'];
        } else {
            //$ship = $req->shipping_address;
            $ship = $req->billing_address;
        }

        // $productList = $this->cartManager->getCartContain();
        // $cartSubTotal = $this->cartManager->subTotal();
        session([
            'ship' => $ship,
            'bill' => $bill,
            'isTemp' => $isTemp,
            'userId' => $userId,
            'shippingCharge' => $req->shipping
        ]);

        if(strpos(url()->previous(), '?cart') !== false) {
            if($req->session()->has('buynow'))
            $req->session()->forget('buynow');
        }

        if ($req->payment_option == 'paypal') {
            return redirect()->route('addmoney.paywithpaypal');
        }
    }
    
    /**
     * Add to cart a product (Increase qty)
     *
     * @return \Illuminate\Http\Response
     */
    public function addToCart(Request $req) {
        
        $configuredProductData = [];
        $productId = $req->input('productId');
        $product = $this->productManager->getProduct($productId);
        $price = $product->sale_price;
        
        if(!empty($req->configurationId))
        {
            $configuredProductData['configurationId'] = $req->configurationId;
            $configuredProductData['partList'] = $req->partList;
            $configuredProductData['productId'] = $req->productId;
            $price = $this->productManager->getPriceByArticlenumber($configuredProductData['partList']['articleNr']);
        }
        else if(isset($req->conf_id))
        {
            if(!empty($req->conf_id))
            {
                $configuredProductData['configurationId'] = $req->conf_id;
                $price = $this->productManager->getPriceByArticlenumber($req->article_nu);
            }
        }
        if($price == FALSE)
        {
            $response = [
                'status' => FALSE,
                'message' => 'Configured product not available, choose different or connect support.',
                'data' => $req->partList['articleNr']
            ];
            return json_encode($response);
        }
        $message = "Product has been added to your cart successfully.";
        
        $status = true;
        $res =  $this->cartManager->addToCart($product,$configuredProductData);
        
        if ($res['status'] == false) {
            $status = false;
            $message = $res['message'];
        }
        
        $productQty = $res['qty'];

        $cartCount = $this->cartManager->count();

        $cartSubTotal = $this->cartManager->subTotal();

        $data = [
            'cartCount' => $cartCount,
            'productQty' => $productQty,
            'productPrice' => str_replace(",", "",$price),
            'cartSubTotal' => $cartSubTotal
        ];
        
        $response = [
            'status' => $status,
            'message' => $message,
            'data' => $data
        ];
        
        echo json_encode($response);
    }
    
    /**
     * Remove from cart a product  (Decrease qty)
     *
     * @return \Illuminate\Http\Response
     */
    public function removeFromCart(Request $req) {
        
        if($req->qty >= 1)
        {
        $configuredProductData = [];
        $productId = $req->input('productId');
        $product = $this->productManager->getProduct($productId);
        $price = $product->sale_price;
        if(isset($req->conf_id))
        {
            if(!empty($req->conf_id))
            {
                $configuredProductData['configurationId'] = $req->conf_id;
                $price = $this->productManager->getPriceByArticlenumber($req->article_nu);
            }
        }

        $productQty = $this->cartManager->removeFromCart($product , $configuredProductData);
        
        $cartCount = $this->cartManager->count();

        $cartSubTotal = $this->cartManager->subTotal();

        $data = [
            'cartCount' => $cartCount,
            'productQty' => $productQty,
            'productPrice' => str_replace(",", "",$price),
            'cartSubTotal' => $cartSubTotal
        ];

        $response = [
            'status'=>true,
            'message'=>"Product successfully removed from the cart.",
            'data' => $data
        ];
    }
    else{
        $response = [
            'status'=>true,
            'message'=>"Product can'nt remove from the cart.",
            'data' => $data
        ];
    }
        echo json_encode($response);

    }

    /**
     * Update cart product
     *
     * @return \Illuminate\Http\Response
     */
    public function updateCart(Request $req) {
        $this->validate($req, [
            'qty' => 'numeric|regex:/^[1-9]\d*$/'
        ]);
        $configuredProductData = [];
        $productId = $req->input('productId');
        $qty = $req->input('qty');
        $product = $this->productManager->getProduct($productId);

        $price = $product->sale_price;
        if(isset($req->conf_id))
        {
            if(!empty($req->conf_id))
            {
                $configuredProductData['configurationId'] = $req->conf_id;
                $price = $this->productManager->getPriceByArticlenumber($req->article_nu);
            }
        }
        $res = $this->cartManager->updateCart($product, $qty);
        
        $status = true;

        $message = "Product quantity has been updated successfully.";
        
        if ($res['status'] == false) {
            $message = $res['message'];
            $status = false;
        }

        $productQty = $res['qty'];
        
        $cartCount = $this->cartManager->count();

        $cartSubTotal = $this->cartManager->subTotal();

        $data = [
            'cartCount' => $cartCount,
            'productQty' => $productQty,
            'productPrice' => str_replace(",", "",$price),
            'cartSubTotal' => $cartSubTotal
        ];

        $response = [
            'status' => $status,
            'message' => $message,
            'data' => $data
        ];
        
        echo json_encode($response);
    }

    /**
     * Remove product
     *
     * @return \Illuminate\Http\Response
     */
    public function removeProduct(Request $req) {
        $rowId = $req->input('rowId');
        $this->cartManager->removeProduct($rowId);
        $cartCount = $this->cartManager->count();

        $cartSubTotal = $this->cartManager->subTotal();

        $data = [
            'cartCount' => $cartCount,
            'cartSubTotal' => $cartSubTotal
        ];

        $response = [
            'status'=>true,
            'message'=>"Product successfully removed from the cart.",
            'data' => $data
        ];
        
        echo json_encode($response);
    }

}
