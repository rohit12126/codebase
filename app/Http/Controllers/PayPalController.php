<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use Validator;
use URL;
use Session;
use Redirect;
/** All Paypal Details class **/
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;
use App\Classes\CartManager;
use App\Classes\ProductManager;

class PaypalController extends Controller
{
    private $_api_context;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        CartManager $cartManager
    )
    {
        $paypal_conf = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential(
                $paypal_conf['client_id'],
                $paypal_conf['secret'])
            );
        $this->_api_context->setConfig($paypal_conf['settings']);
        $this->cartManager = $cartManager;
    }
    public function payWithpaypal(Request $request)
    {
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');
        $i=0;
        $currency = 'USD';
        $orders = $this->cartManager->getCartContain();
        foreach($orders as $key => $product)
            {
                $items[$i] = new Item();
                $items[$i]->setName($product->name)
                ->setCurrency($currency)
                ->setQuantity($product->qty)
                        ->setPrice($product->price); 
                $i++;
            } 
        $subTotal = str_replace( ',', '',$this->cartManager->subTotal());
        $itemList = new ItemList();
        $itemList->setItems($items);
        $amount = new Amount();
        $amount->setCurrency('USD')
            ->setTotal($subTotal);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($itemList)
            ->setDescription('Chapter 247');
        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(URL::route('payment.status'))
            ->setCancelUrl(URL::route('payment.status'));

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));
        try {

            $payment->create($this->_api_context);

        } catch (\PayPal\Exception\PPConnectionException $ex) {
            if (config('app.debug')) {
                session()->put('error', 'Connection timeout');
                return redirect()->route('paywithpaypal');
            } else {
                session()->put('error', 'Some error occur, sorry for inconvenient');
                return redirect()->route('paywithpaypal');
            }
        }

        foreach ($payment->getLinks() as $link) {
            if ($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }

        $request->session()->put('paypal_payment_id', $payment->getId());
        if (isset($redirect_url)) {

            return redirect()->away($redirect_url);
        }

        session('error', 'Unknown Error Occured');
        return redirect()->route('paywithpaypal');

    }
    public function getPaymentStatus(Request $request)
    {
        $payment_id = $request->session()->get('paypal_payment_id');
        $request->session()->forget('paypal_payment_id');
            if (empty($request->input("PayerID")) || empty($request->input("token"))) {
                return redirect()->back();
            }
        $payment = Payment::get($payment_id, $this->_api_context);
                $execution = new PaymentExecution();
                $execution->setPayerId($request->input("PayerID"));
                $result = $payment->execute($execution, $this->_api_context);
        if ($result->getState() == 'approved') {
        session()->put('success', 'Payment success');
        return redirect()->route('order.addOrder');
        }
        session()->put('error', 'Payment Failed');
        return redirect()->back();
    }
}