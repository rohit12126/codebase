<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Classes\ProductManager;
use App\Classes\CartManager;
use App\Classes\GuestUserManager;
use App\Classes\UserManager;
use App\Classes\AddressManager;

use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    protected $productManager;
    protected $cartManager;
    protected $guestUserManager;
    protected $addressManager;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        ProductManager $productManager,
        CartManager $cartManager,
        GuestUserManager $guestUserManager,
        AddressManager $addressManager
    )
    {
        $this->productManager = $productManager;
        $this->cartManager = $cartManager;
        $this->guestUserManager = $guestUserManager;
        $this->addressManager = $addressManager;
        
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

    /**
     * Get Addresse List
     *
     * @return \Illuminate\Http\Response
     */
    public function getAddresses(Request $req) {

        $productList = $this->cartManager->getCartContain();
        
        if($productList->isEmpty()) {
            return redirect('cart/');
        }
        
        $isTemp = 0;
        $userId = 0;
        
        $shippingAddresses = [];
        $billingAddresses = [];
        $cartSubTotal = $this->cartManager->subTotal();
        $userData = [];
        if (Auth::check()) {
            $userId = Auth::user()->id;
            $userData = Auth::user();
            $shippingAddresses = $this->addressManager->getAddresses($userId, 1, $isTemp);
            $billingAddresses = $this->addressManager->getAddresses($userId, 2, $isTemp);
        } else {
            $isTemp = 1;
            $userId = $this->guestUserManager->getUserId();
            $shippingAddresses = $this->addressManager->getAddresses($userId, 1, $isTemp);
            $billingAddresses = $this->addressManager->getAddresses($userId, 2, $isTemp);
        }
        
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
                'userData' => $userData
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
                $req->bill_name
                //$req->bill_email,
                //$req->bill_phone
            );
        }
        /* Shipping Address */
        //if (!isset($req->shipping_address)) {
        if (!isset($req->billing_address) || ($req->isNewAddress == 1)) {
            $shippingAddress=[
                'name'=>$req->ship_name,
                'mobile'=>$req->ship_phone,
                'address'=>$req->ship_address,
                'email'=>$req->ship_email,
                'city'=>$req->ship_city,
                'state'=>$req->ship_state,
                'zipcode'=>$req->ship_zipcode,
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

        $productList = $this->cartManager->getCartContain();
        $cartSubTotal = $this->cartManager->subTotal();
        session([
            'ship' => $ship,
            'bill' => $bill,
            'isTemp' => $isTemp,
            'userId' => $userId
        ]);

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
        $productId = $req->input('productId');
        $product = $this->productManager->getProduct($productId);
        $message = "Product successfully added to the cart.";
        
        $status = true;
        $res =  $this->cartManager->addToCart($product);
        
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
            'productPrice' => $product->sale_price,
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
        $productId = $req->input('productId');
        $product = $this->productManager->getProduct($productId);
        $productQty = $this->cartManager->removeFromCart($product);
        
        $cartCount = $this->cartManager->count();

        $cartSubTotal = $this->cartManager->subTotal();

        $data = [
            'cartCount' => $cartCount,
            'productQty' => $productQty,
            'productPrice' => $product->sale_price,
            'cartSubTotal' => $cartSubTotal
        ];

        $response = [
            'status'=>true,
            'message'=>"Product successfully removed from the cart.",
            'data' => $data
        ];
        
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
        $productId = $req->input('productId');
        $qty = $req->input('qty');
        $product = $this->productManager->getProduct($productId);
        
        $res = $this->cartManager->updateCart($product, $qty);
        
        $status = true;

        $message = "Product successfully added to the cart.";
         
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
            'productPrice' => $product->sale_price,
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
