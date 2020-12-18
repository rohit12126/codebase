<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Classes\ProductManager;
use App\Classes\CartManager;
use App\Classes\GuestUserManager;
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
        if (Auth::check()) {
            $userId = Auth::user()->id;
            $shippingAddresses = $this->addressManager->getAddresses($userId, 1, $isTemp);
            $billingAddresses = $this->addressManager->getAddresses($userId, 2, $isTemp);
        } else {
            $isTemp = 1;
            $userId = $this->guestUserManager->getUserId();
            $shippingAddresses = $this->addressManager->getAddresses($userId, 1, $isTemp);
            $billingAddresses = $this->addressManager->getAddresses($userId, 2, $isTemp);
        }
        dump($cartSubTotal);
        $a = (float) $cartSubTotal;
        dd($a);
        return view('frontend.address',
            [
                'shippingAddresses' => $shippingAddresses,
                'billingAddresses' => $billingAddresses,
                'userId' => $userId,
                'isTemp' => $isTemp,
                'productList' => $productList,
                'cartSubTotal' => (float) $cartSubTotal
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
        if (!isset($req->billing_address)) {
            $billingAddress=[
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
              
        /* Shipping Address */
        if (!isset($req->shipping_address)) {
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
            $ship = $req->shipping_address;
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
        
        $productQty =  $this->cartManager->addToCart($product);

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
            'message'=>"Item successfully added to the cart.",
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
            'message'=>"Item successfully removed from the cart.",
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
        $productId = $req->input('productId');
        $qty = $req->input('qty');
        $product = $this->productManager->getProduct($productId);
        $this->cartManager->updateCart($product, $qty);

        $cartCount = $this->cartManager->count();

        $cartSubTotal = $this->cartManager->subTotal();

        $data = [
            'cartCount' => $cartCount,
            'productQty' => $qty,
            'productPrice' => $product->sale_price,
            'cartSubTotal' => $cartSubTotal
        ];

        $response = [
            'status'=>true,
            'message'=>"Item successfully added to the cart.",
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
            'message'=>"Item successfully removed from the cart.",
            'data' => $data
        ];
        
        echo json_encode($response);
    }
}
