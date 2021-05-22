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
use App\Classes\TaxManager;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderConfirm;
use PDF;
use Terbilang;
use Illuminate\Support\Facades\Auth;
use App\Models\Payment as PaymentModel;
use Image;

class OrderController extends Controller
{
    protected $productManager;
    protected $cartManager;
    protected $guestUserManager;
    protected $addressManager;
    protected $orderManager;
    protected $zoneManager;
    protected $taxManager;
    
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
        ZoneManager $zoneManager,
        TaxManager $taxManager
    )
    {
        $this->productManager = $productManager;
        $this->cartManager = $cartManager;
        $this->guestUserManager = $guestUserManager;
        $this->addressManager = $addressManager;
        $this->orderManager = $orderManager;
        $this->zoneManager = $zoneManager;
        $this->taxManager = $taxManager;
    }
    
    /**
     * Add Order
     *
     * @param Request 
     * @return \Illuminate\Http\Response
     */
    
    public function addOrder(Request $req) {
        if($req->session()->has('userId')) {
            $isTempUser = $req->session()->get('isTemp');
            $userId = $req->session()->get('userId');
            $shippingCharge = $req->session()->get('shippingCharge');
            $taxCharge = $req->session()->get('taxCharge') ?? 0;

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

                
                if($req->session()->has('buynow'))
                {
                    $cartProducts = $req->session()->get('buynow');
                    $cartSubTotal = $cartProducts['item']->price;
                }
                else
                {
                    $cartSubTotal = str_replace(",","", $this->cartManager->subTotal());
                    $cartProducts = $this->cartManager->getCartContain();
                }
                $orderData['grand_total'] = (float) $cartSubTotal + $shippingCharge + $taxCharge;
                $order = $this->orderManager->addOrder($orderData);

                foreach ($cartProducts as $key => $product) {
                    $configureDetail = NULL;

                    if(isset($product->options['configureDetails']['partList'])){

                        $path = "https://uploads.roomle.com/configurations/".$product->options['configureDetails']['configurationId']."/perspectiveImage.png";
                        $filename = $orderNumber.'_'.$product->id.'_perspectiveImage.png';
                        Image::make($path)->save(('upload/orders/' . $filename));
                        $Detail = $product->options['configureDetails']['partList'];
                        foreach($Detail as $k => $a){
                            $Detail = (json_encode($a));
                        }
                        
                        $configureDetail = json_decode($Detail);
                        
                        array_push($configureDetail,
                            $product->options['configureDetails']['partList']['articleNr'],
                            $filename,
                        );
                    }
                    $orderProduct = [
                        'order_no' => $orderNumber,
                        'product_id' => $product->id,
                        'product_quantity' => $product->qty,
                        'price' => $product->price,
                        'configure_detail' => json_encode($configureDetail)
                    ];
                    $this->orderManager->addOrderProduct($orderProduct);
                }
                $paymentId = session()->get('payment_id');
                
                PaymentModel::where('id', $paymentId)
                    ->update(['order_no' => $orderNumber]);

                if($req->session()->has('buynow'))
                {
                    $req->session()->forget('buynow');
                }
                else
                {
                    $this->cartManager->destroy();
                    $this->cartManager->destroyCartDB($userId);
                }
                $product = $this->orderManager->getProductsByOrder($order->order_no);

                $req->session()->forget(
                    ['bill',
                    'ship',
                    'payment_id',
                    'shippingCharge',
                    'taxCharge',
                    'configuredProductData'
                    ]
                );
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
            } if ( $email != !empty($order->getShippingAddress->email) ) {
                Mail::to($order->getShippingAddress->email)->send(new OrderConfirm($order));
            }

            return redirect()->route('order.success', ['order_no' => $order->order_no]);
        }
    }

    public function buyNow(Request $req)
    {
        $buyarray = [
                'mode' => 'buynow',
                'pid' => $req->productId
            ];
            
        return redirect()->route('address.get');
        
    }

    /**
     * Order Success
     *
     * @param Request 
     * @return view Order-Success
     */

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

    /**
     * Generates Invoice
     *
     * @param Request 
     * @return \Illuminate\Http\Response 
     * 
     */
    public function invoice(Request $req) {
        $this->validate( $req, [
            'order_no' => 'required'
        ]); 

        $order = $this->orderManager->getOrderByOrderNUmberWithOrderAddress($req->order_no);
        if(!$order)
        return redirect('/');
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

    /**
     * Calculate shipping Price based on zones
     *
     * @param Request 
     * @return \Illuminate\Http\Response
     */
    public function shippingPrice(Request $req)
    {
        $shippingPrice = 0;
        $hshippingPrice = 0;
        $shipPrice= 0;
        $tax = [];
        $price = $this->zoneManager->getPrice($req->zone_id);
        if ( ! empty($price) )
            {
                foreach($req->pid as $productId=>$qty)
                {
                    if (strpos($productId, '.') !== false) {
                        $productId = strstr($productId, '.',true);
                    }
                    $hardware = $this->productManager->checkHardware($productId);
                    if($hardware)
                    {
                        foreach(json_decode($price->hardware_price) as $hp)
                        {                         
                            if(($hardware->weight /* * $qty*/ >= $hp->min_weight) && ($hp->max_weight >= $hardware->weight /* * $qty*/))
                            {
                                $hshippingPrice = $hp->price;
                            }
                            elseif(($hardware->weight /* * $qty*/ >= $hp->min_weight) && $hp->max_weight <= $hardware->weight /* * $qty*/)
                            {
                                $hshippingPrice = $hp->price;
                            }
                        }
                    }
                    else
                    {
                        $shippingPrice = $price->product_price;
                    }

                }
                
                if($taxes = $this->taxManager->getTaxByStateId($req->state))
                {
                    $tax['type'] = $taxes->tax->rate_type;
                    $tax['rate'] = $taxes->tax->rate;
                }
            }
         $resp['shipping'] = number_format((float) (($shippingPrice == 0 ) ?  $hshippingPrice : $shippingPrice), 2, '.', '');
         $resp['tax'] = $tax;
         return $resp;
    }
    
}
