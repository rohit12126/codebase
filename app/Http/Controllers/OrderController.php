<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Classes\ProductManager;
use App\Classes\CartManager;
use App\Classes\GuestUserManager;
use App\Classes\AddressManager;
use App\Classes\OrderManager;


use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    protected $productManager;
    protected $cartManager;
    protected $guestUserManager;
    protected $addressManager;
    protected $orderManager;
    
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
        OrderManager $orderManager
    )
    {
        $this->productManager = $productManager;
        $this->cartManager = $cartManager;
        $this->guestUserManager = $guestUserManager;
        $this->addressManager = $addressManager;
        $this->orderManager = $orderManager;
        
    }
    
    /**
     * Add Order
     *
     * @return \Illuminate\Http\Response
     */
   
    public function addOrder(Request $req) {
        $orderNumber = $this->orderManager->generateOrderNumber();
        
        $orderData['order_no'] = $orderNumber;
        $isTempUser = $req->session()->get('isTemp');
        $userId = $req->session()->get('userId');
        $orderData['user_id'] = $userId;
        if(!empty($isTempUser)) {
            $orderData['temp_user'] = $isTempUser;
        }
        $orderData['billing_address'] = $req->session()->get('bill');
        $orderData['shipping_address'] = $req->session()->get('ship');
        $orderData['status'] = 1;
        $orderData['grand_total'] = (float) $this->cartManager->subTotal();
        
        $order = $this->orderManager->addOrder($orderData);
    
        $cartProducts = $this->cartManager->getCartContain();

        foreach ($cartProducts as $key => $product) {
            $orderProduct = [
                'order_no' => $orderNumber,
                'product_id' => $product->id,
                'product_quantity' => $product->qty,
                'price' => $product->price,
            ];
            $this->orderManager->addOrderProduct($orderProduct);
        }
        
        $this->cartManager->destroy();
        $this->cartManager->destroyCartDB($userId);
        $req->session()->forget(['isTemp', 'userId','bill', 'ship']);
        return view('frontend.order-success',
            [
                'order' => $order,
            ]
        );
    }
    
}
