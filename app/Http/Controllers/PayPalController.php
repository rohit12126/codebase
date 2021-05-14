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
use PayPal\Api\WebProfile;
use PayPal\Api\InputFields;
use App\Classes\CartManager;
use App\Classes\ProductManager;
use App\Classes\AddressManager;
use App\Models\Payment as PaymentModel;

class PaypalController extends Controller
{
    private $_api_context;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        CartManager $cartManager,
        AddressManager $addressManager
    )
    {
        $paypal_conf = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential(
                $paypal_conf['client_id'],
                $paypal_conf['secret'])
            );
        $this->_api_context->setConfig($paypal_conf['settings']);
        $this->cartManager = $cartManager;
        $this->addressManager = $addressManager;
    }
    public function payWithpaypal(Request $request)
    {
        if($request->session()->has('buynow')){
            $orders = $request->session()->get('buynow');
            $subTotal = $orders['item']->price;
        }else{
            $orders = $this->cartManager->getCartContain();
            $subTotal = str_replace( ',', '',$this->cartManager->subTotal());
            if($orders->isEmpty()) {
                return redirect('cart/');
            }
        }
        $payer = new Payer(); 
        $payer->setPaymentMethod('paypal');
        $i=0;
        $currency = 'USD';

        foreach($orders as $key => $product) {
                $items[$i] = new Item();
                $items[$i]->setName($product->name)
                ->setCurrency($currency)
                ->setQuantity($product->qty)
                ->setPrice($product->price); 
                $i++;
        } 

        $shippingAddress =  $this->addressManager
        ->getAddressesById(Session()->get('ship'));

        if(!is_null($shippingAddress->state && $shippingAddress->name)){
        $shippingAddress =  $this->addressManager
                ->getAddressesById(Session()->get('bill'));
        }
        $shippingAddres = [
            "recipient_name" => $shippingAddress->name ?? '',
            "line1" => $shippingAddress->address ?? '',
            "city" => $shippingAddress->city ?? '',
            "country_code" => "US",
            "postal_code" => $shippingAddress->zipcode ?? '',
            "state" => $shippingAddress->state ?? '',
            "phone" => $shippingAddress->mobile ?? ''
        ];
        
        $shipCost = Session()->get('shippingCharge');
        $tax = Session()->get('taxCharge');

        $itemList = new ItemList();
        $itemList->setItems($items);
        $itemList->setShippingAddress($shippingAddres); 


        $details = new Details();
            $details->setSubtotal($subTotal)
                ->setTax($tax)
                ->setShipping($shipCost);
            

        $amount = new Amount();
        $amount->setCurrency('USD')
            ->setTotal($subTotal + $shipCost + $tax)
            ->setDetails($details);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($itemList)
            ->setDescription('Chapter 247');
        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(URL::route('payment.status'))
            ->setCancelUrl(URL::route('payment.status'));
        
        /* Web Profile exprerience created */ 
        $inputFields = new InputFields();

        $inputFields->setAllowNote(true)
            ->setNoShipping(1)
            ->setAddressOverride(0);
        
        $webProfile = new WebProfile();

        $webProfile->setName("Custom Closets" . uniqid())
            ->setInputFields($inputFields)
            ->setTemporary(true);
        $request = clone $webProfile;

        try {
            $createProfileResponse = $webProfile->create($this->_api_context);
        } catch (\PayPal\Exception\PayPalConnectionException $ex) {
            // dd($ex);
            exit(1);
            session()->put('error', 'Some error occur, sorry for inconvenient');
            return redirect()->route('home');
        }
        
        $experienceId = $createProfileResponse->getId();

        /* Web Profile exprerience created */ 
        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setExperienceProfileId($experienceId)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));
        
        try {
            $payment->create($this->_api_context);
        } catch (\PayPal\Exception\PayPalConnectionException $ex) {
            $errors = $ex->getData();
            foreach(json_decode($errors)->details as $error)
            {
                $msg = 'please enter a valid '.$error->field.'.';
                $adderror[$error->field] = $msg;
            }
            if(session()->has('buynow'))
            {
                return redirect()->route('address.get',['buy-now'])->withErrors($adderror);
            }
            return redirect()->route('address.get')->withErrors($adderror);
        }
        catch (\PayPal\Exception\PPConnectionException $ex) {
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

        session()->put('paypal_payment_id', $payment->getId());
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
        $data = [
            'payment_id'=>$result->id,
            'amount'=>$result->transactions[0]->amount->total,
            'currency'=>$result->transactions[0]->amount->currency,
            'shipping'=>$result->transactions[0]->amount->details->shipping,
            'status'=>$result->state,
            'tax' => $result->transactions[0]->amount->details->tax,
        ];
        
        $paymentData = PaymentModel::create($data);
        
        session(
            ['payment_id' => $paymentData->id]
        );
        if ($result->getState() == 'approved') {
            return redirect()->route('order.addOrder');
        }
        return redirect()->back();
    }
}
