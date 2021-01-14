<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Classes\ProductManager;
use App\Classes\CartManager;
use App\Classes\GuestUserManager;
use App\Classes\AddressManager;
use App\Classes\OrderManager;
use App\Classes\ZoneManager;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderConfirm;
use PDF;
use Terbilang;
use Illuminate\Support\Facades\Auth;
use App\Models\Payment as PaymentModel;
class OrderController extends Controller
{
    protected $productManager;
    protected $cartManager;
    protected $guestUserManager;
    protected $addressManager;
    protected $orderManager;
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
        OrderManager $orderManager,
        ZoneManager $zoneManager
    )
    {
        $this->productManager = $productManager;
        $this->cartManager = $cartManager;
        $this->guestUserManager = $guestUserManager;
        $this->addressManager = $addressManager;
        $this->orderManager = $orderManager;
        $this->zoneManager = $zoneManager;
    }
    
    /**
     * Add Order
     *
     * @return \Illuminate\Http\Response
     */
    
    public function addOrder(Request $req) {
        if($req->session()->has('userId')) {
            $isTempUser = $req->session()->get('isTemp');
            $userId = $req->session()->get('userId');
            $shippingCharge = $req->session()->get('shippingCharge');

            if(strpos(url()->previous(), 'order/add-order') == false) {
                $orderNumber = $this->orderManager->generateOrderNumber();
                
                $orderData['order_no'] = $orderNumber;
                $orderData['user_id'] = $userId;
                if(!empty($isTempUser)) {
                    $orderData['temp_user'] = $isTempUser;
                }
                $orderData['billing_address'] = $req->session()->get('bill');
                $orderData['shipping_address'] = $req->session()->get('ship');
                $orderData['status'] = 1;

                $orderData['shipping_charge'] = 
                $cartSubTotal = str_replace(",","", $this->cartManager->subTotal());
                $orderData['grand_total'] = (float) $cartSubTotal + $shippingCharge;
                
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
                $paymentId = session()->get('payment_id');
                
                PaymentModel::where('id', $paymentId)
                    ->update(['order_no' => $orderNumber]);
                $this->cartManager->destroy();
                $this->cartManager->destroyCartDB($userId);
                $product = $this->orderManager->getProductsByOrder($order->order_no);
                $req->session()->forget(['bill', 'ship', 'payment_id','shippingCharge']);
            } else {
                    $order = $this->orderManager->getLastOrder($userId, $isTempUser);
                    $product = [];
                    if (!is_null($order)) {
                        $product = $this->orderManager->getProductsByOrder($order->order_no);
                    }
            }
            
            $order = $this->orderManager->getOrderByOrderNUmberWithOrderAddress($order->order_no);
            
            $email = $order->getBillingAddress->email;
            
            if (!empty($email)) {
                Mail::to($email)->send(new OrderConfirm($order));
            }

            return redirect()->route('order.success', ['order_no' => $order->order_no]);
        }
    }

    public function orderSuccess(Request $req) {
        $this->validate( $req, [
            'order_no' => 'required'
        ]); 
        
        $orderNo = $req->order_no;
        $product = $this->orderManager->getProductsByOrder($orderNo);
        $order = $this->orderManager->getOrderByOrderNUmberWithOrderAddress($orderNo);
        
        return view('frontend.order-success', [
            'order' => $order,
            'product' => $product
        ]);
    }

    public function invoice(Request $req) {
        $this->validate( $req, [
            'order_no' => 'required'
        ]); 

        $order = $this->orderManager->getOrderByOrderNUmberWithOrderAddress($req->order_no);
        $order->total_text = ucwords(Terbilang::make($order->grand_total, ' dollars'));
        
        view()->share('order', $order);

        if($req->has('download')){
        	// Set extra option
        	PDF::setOptions(['dpi' => 50, 'defaultFont' => 'sans-serif']);
        	// pass view file
            $pdf = PDF::loadView('frontend.invoice');
            // download pdf
            return $pdf->download("customclosets-".$req->order_no.'.pdf');
        }
        return view('frontend.invoice');
    }

    public function shippingPrice(Request $req)
    {
        $shippingPrice = 0;
        $hshippingPrice = 0;
        $shipPrice= 0;
        $price = $this->zoneManager->getPrice($req->zone_id);
        
        if ( ! empty($price) )
            {
                $contain = $this->cartManager->getCartContain();
                
                foreach($contain as $product)
                {
                    $hardware = $this->productManager->checkHardware($product->id);
                    if($hardware)
                    {
                        $hshippingPrice+= $price->hardware_price * $product->qty;
                    }
                    else
                    {
                        $shippingPrice+= $price->product_price * $product->qty;
                    }
                }
                if($shippingPrice == 0)
                {
                    $shipPrice = $shippingPrice + $hshippingPrice;
                }
                else
                {
                    $shipPrice = $shippingPrice;
                }
            }
        
        return number_format((float) $shipPrice, 2, '.', '');
    }
    
}
