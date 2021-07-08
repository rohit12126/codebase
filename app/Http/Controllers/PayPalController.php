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
use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;
use App\Classes\OrderManager;


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
        AddressManager $addressManager,
        OrderManager $orderManager
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
        $this->orderManager = $orderManager;
    }

    /**
     * 
     * 
     *******************************************/
    public function payWithAuthorize(Request $request)
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
        // dd($request);
    $merchantAuthentication = new AnetAPI\MerchantAuthenticationType();
    $merchantAuthentication->setName('5KP3u95bQpv');
    $merchantAuthentication->setTransactionKey('346HZ32z3fP4hTG2');
    
    // Set the transaction's refId
    $refId = 'ref' . time();

    $card = $request->session()->get('card');

    // Create the payment data for a credit card
    $creditCard = new AnetAPI\CreditCardType();
    $creditCard->setCardNumber($card['number']);
    $creditCard->setExpirationDate($card['year']."-".$card['month']);
    $creditCard->setCardCode($card['cvc']);

    // Add the payment data to a paymentType object
    $paymentOne = new AnetAPI\PaymentType();
    $paymentOne->setCreditCard($creditCard);
        $orderNu = $this->orderManager->generateOrderNumber();
    // Create order information
    $order = new AnetAPI\OrderType();
    $order->setInvoiceNumber($orderNu);
    $order->setDescription("An Order Placed on Custom Doors And Mirror");


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
        "phone" => $shippingAddress->mobile ?? '',
        "email" => $shippingAddress->email ?? '',
    ];


    // Set the customer's Bill To address
    $customerAddress = new AnetAPI\CustomerAddressType();
    $customerAddress->setFirstName($shippingAddres['recipient_name']);
    // $customerAddress->setLastName("Johnson");
    $customerAddress->setAddress($shippingAddres['line1']);
    $customerAddress->setCity($shippingAddres['city']);
    $customerAddress->setState($shippingAddres['state']);
    $customerAddress->setZip($shippingAddres['postal_code']);
    $customerAddress->setCountry("USA");

    // Set the customer's identifying information
    $customerData = new AnetAPI\CustomerDataType();
    $customerData->setType("individual");
    $customerData->setId("cdm-".$orderNu);
    $customerData->setEmail($shippingAddres['email']);

    // Add values for transaction settings
    $duplicateWindowSetting = new AnetAPI\SettingType();
    $duplicateWindowSetting->setSettingName("duplicateWindow");
    $duplicateWindowSetting->setSettingValue("60");

    // Add some merchant defined fields. These fields won't be stored with the transaction,
    // but will be echoed back in the response.
    $merchantDefinedField1 = new AnetAPI\UserFieldType();
    $merchantDefinedField1->setName("customerLoyaltyNum");
    $merchantDefinedField1->setValue($orderNu);

    $shipCost = Session()->get('shippingCharge');
    $tax = Session()->get('taxCharge');
  
    // Create a TransactionRequestType object and add the previous objects to it
    $transactionRequestType = new AnetAPI\TransactionRequestType();
    $transactionRequestType->setTransactionType("authCaptureTransaction");
    $transactionRequestType->setAmount($subTotal + $tax + $shipCost);
    $transactionRequestType->setOrder($order);
    $transactionRequestType->setPayment($paymentOne);
    $transactionRequestType->setBillTo($customerAddress);
    $transactionRequestType->setCustomer($customerData);
    $transactionRequestType->addToTransactionSettings($duplicateWindowSetting);
    $transactionRequestType->addToUserFields($merchantDefinedField1);
    // $transactionRequestType->addToUserFields($merchantDefinedField2);

    // Assemble the complete transaction request
    $request = new AnetAPI\CreateTransactionRequest();
    $request->setMerchantAuthentication($merchantAuthentication);
    $request->setRefId($refId);
    $request->setTransactionRequest($transactionRequestType);

    // Create the controller and get the response
    $controller = new AnetController\CreateTransactionController($request);
    $response = $controller->executeWithApiResponse(\net\authorize\api\constants\ANetEnvironment::SANDBOX);
    

    if ($response != null) {
        // Check to see if the API request was successfully received and acted upon
        if ($response->getMessages()->getResultCode() == "Ok") {
            // Since the API request was successful, look for a transaction response
            // and parse it to display the results of authorizing the card
            $tresponse = $response->getTransactionResponse();
        
            if ($tresponse != null && $tresponse->getMessages() != null) {
                echo " Successfully created transaction with Transaction ID: " . $tresponse->getTransId() . "\n";
                echo " Transaction Response Code: " . $tresponse->getResponseCode() . "\n";
                echo " Message Code: " . $tresponse->getMessages()[0]->getCode() . "\n";
                echo " Auth Code: " . $tresponse->getAuthCode() . "\n";
                echo " Description: " . $tresponse->getMessages()[0]->getDescription() . "\n";
            } else {
                echo "Transaction Failed \n";
                if ($tresponse->getErrors() != null) {
                    echo " Error Code  : " . $tresponse->getErrors()[0]->getErrorCode() . "\n";
                    echo " Error Message : " . $tresponse->getErrors()[0]->getErrorText() . "\n";
                }
            }
            // Or, print errors if the API request wasn't successful
            $data = [
                'payment_id'=>$tresponse->getTransId(),
                'amount'=>$subTotal + $tax + $shipCost,
                'currency'=>'USD',
                'shipping'=>$shipCost,
                'status'=> 'OK',
                'tax' => $tax,
                'order_no' => $orderNu,
            ];
            
            $paymentData = PaymentModel::create($data);
            
            session(
                ['payment_id' => $paymentData->id,
                'orderNu' => $orderNu]
            );
            return redirect()->route('order.addOrder');
        } else {
            if ($tresponse != null && $tresponse->getErrors() != null) {
                if(session()->has('buynow'))
                {
                    return redirect()->route('address.get',['buy-now'])->withErrors(['msg', $tresponse->getErrors()[0]->getErrorText()]);
                }
                return redirect()->route('address.get')->withErrors(['msg', $tresponse->getErrors()[0]->getErrorText()]);
                } else {
                    if(session()->has('buynow'))
                    {
                        return redirect()->route('address.get',['buy-now'])->withErrors(['msg', $response->getMessages()->getMessage()[0]->getText()]);
                    }
                    return redirect()->route('address.get')->withErrors(['msg', $response->getMessages()->getMessage()[0]->getText()]);
                }
            }
    } else {
        echo  "No response returned \n";
    }

    

    dd($response);
    }

    /**
     * 
     * 
     * 
     *******************************************/

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

        $webProfile->setName("Custom Doors and Mirrors" . uniqid())
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

    /**
     * 
     * 
     * 
     * 
     *******************************************/
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
