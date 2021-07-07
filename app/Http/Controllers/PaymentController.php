<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;

class PaymentController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        //$this->middleware('auth'); // later enable it when needed user login while payment
    }

    // start page form after start
    public function pay() {
        return view('pay');
    }

    public function handleonlinepay(Request $request) {
        // dd($request->input());
//         $input = $request->input();
        
//         /* Create a merchantAuthenticationType object with authentication details
//           retrieved from the constants file */
//         $merchantAuthentication = new AnetAPI\MerchantAuthenticationType();
//         $merchantAuthentication->setName(env('MERCHANT_LOGIN_ID'));
//         $merchantAuthentication->setTransactionKey(env('MERCHANT_TRANSACTION_KEY'));

//         // Set the transaction's refId
//         $refId = 'ref' . time();
//         $cardNumber = preg_replace('/\s+/', '', $input['cardNumber']);
        
//         // Create the payment data for a credit card
//         $creditCard = new AnetAPI\CreditCardType();
//         $creditCard->setCardNumber($cardNumber);
//         $creditCard->setExpirationDate($input['expiration-year'] . "-" .$input['expiration-month']);
//         $creditCard->setCardCode($input['cvv']);

//         // Add the payment data to a paymentType object
//         $paymentOne = new AnetAPI\PaymentType();
//         $paymentOne->setCreditCard($creditCard);

//         // Create a TransactionRequestType object and add the previous objects to it
//         $transactionRequestType = new AnetAPI\TransactionRequestType();
//         $transactionRequestType->setTransactionType("authCaptureTransaction");
//         $transactionRequestType->setAmount($input['amount']);
//         $transactionRequestType->setPayment($paymentOne);

//         // Assemble the complete transaction request
//         $requests = new AnetAPI\CreateTransactionRequest();
//         $requests->setMerchantAuthentication($merchantAuthentication);
//         $requests->setRefId($refId);
//         $requests->setTransactionRequest($transactionRequestType);

//         // Create the controller and get the response
//         $controller = new AnetController\CreateTransactionController($requests);
//         $response = $controller->executeWithApiResponse(\net\authorize\api\constants\ANetEnvironment::SANDBOX);
//         dd($response);
//         if ($response != null) {
//             // Check to see if the API request was successfully received and acted upon
//             if ($response->getMessages()->getResultCode() == "Ok") {
//                 // Since the API request was successful, look for a transaction response
//                 // and parse it to display the results of authorizing the card
//                 $tresponse = $response->getTransactionResponse();

//                 if ($tresponse != null && $tresponse->getMessages() != null) {
//                     dd($tresponse);
// //                    echo " Successfully created transaction with Transaction ID: " . $tresponse->getTransId() . "\n";
// //                    echo " Transaction Response Code: " . $tresponse->getResponseCode() . "\n";
// //                    echo " Message Code: " . $tresponse->getMessages()[0]->getCode() . "\n";
// //                    echo " Auth Code: " . $tresponse->getAuthCode() . "\n";
// //                    echo " Description: " . $tresponse->getMessages()[0]->getDescription() . "\n";
//                     $message_text = $tresponse->getMessages()[0]->getDescription().", Transaction ID: " . $tresponse->getTransId();
//                     $msg_type = "success_msg";    
                    
//                     \App\PaymentLogs::create([                                         
//                         'amount' => $input['amount'],
//                         'response_code' => $tresponse->getResponseCode(),
//                         'transaction_id' => $tresponse->getTransId(),
//                         'auth_id' => $tresponse->getAuthCode(),
//                         'message_code' => $tresponse->getMessages()[0]->getCode(),
//                         'name_on_card' => trim($input['owner']),
//                         'quantity'=>1
//                     ]);
//                 } else {
//                     $message_text = 'There were some issue with the payment. Please try again later.';
//                     $msg_type = "error_msg";                                    

//                     if ($tresponse->getErrors() != null) {
//                         $message_text = $tresponse->getErrors()[0]->getErrorText();
//                         $msg_type = "error_msg";                                    
//                     }
//                 }
//                 // Or, print errors if the API request wasn't successful
//             } else {
//                 $message_text = 'There were some issue with the payment. Please try again later.';
//                 $msg_type = "error_msg";                                    

//                 $tresponse = $response->getTransactionResponse();

//                 if ($tresponse != null && $tresponse->getErrors() != null) {
//                     $message_text = $tresponse->getErrors()[0]->getErrorText();
//                     $msg_type = "error_msg";                    
//                 } else {
//                     $message_text = $response->getMessages()->getMessage()[0]->getText();
//                     $msg_type = "error_msg";
//                 }                
//             }
//         } else {
//             $message_text = "No response returned";
//             $msg_type = "error_msg";
//         }
//         return back()->with($msg_type, $message_text);
//     }

    $merchantAuthentication = new AnetAPI\MerchantAuthenticationType();
    $merchantAuthentication->setName(env('MERCHANT_LOGIN_ID'));
    $merchantAuthentication->setTransactionKey(env('MERCHANT_TRANSACTION_KEY'));
    
    // Set the transaction's refId
    $refId = 'ref' . time();

    // Create the payment data for a credit card
    $creditCard = new AnetAPI\CreditCardType();
    $creditCard->setCardNumber("4111111111111111");
    $creditCard->setExpirationDate("2038-12");
    $creditCard->setCardCode("123");

    // Add the payment data to a paymentType object
    $paymentOne = new AnetAPI\PaymentType();
    $paymentOne->setCreditCard($creditCard);

    // Create order information
    $order = new AnetAPI\OrderType();
    $order->setInvoiceNumber("10101");
    $order->setDescription("Golf Shirts");

    // Set the customer's Bill To address
    $customerAddress = new AnetAPI\CustomerAddressType();
    $customerAddress->setFirstName("Ellen");
    $customerAddress->setLastName("Johnson");
    $customerAddress->setCompany("Souveniropolis");
    $customerAddress->setAddress("14 Main Street");
    $customerAddress->setCity("Pecan Springs");
    $customerAddress->setState("TX");
    $customerAddress->setZip("44628");
    $customerAddress->setCountry("USA");

    // Set the customer's identifying information
    $customerData = new AnetAPI\CustomerDataType();
    $customerData->setType("individual");
    $customerData->setId("99999456654");
    $customerData->setEmail("EllenJohnson@example.com");

    // Add values for transaction settings
    $duplicateWindowSetting = new AnetAPI\SettingType();
    $duplicateWindowSetting->setSettingName("duplicateWindow");
    $duplicateWindowSetting->setSettingValue("60");

    // Add some merchant defined fields. These fields won't be stored with the transaction,
    // but will be echoed back in the response.
    $merchantDefinedField1 = new AnetAPI\UserFieldType();
    $merchantDefinedField1->setName("customerLoyaltyNum");
    $merchantDefinedField1->setValue("1128836273");

    $merchantDefinedField2 = new AnetAPI\UserFieldType();
    $merchantDefinedField2->setName("favoriteColor");
    $merchantDefinedField2->setValue("blue");

    // Create a TransactionRequestType object and add the previous objects to it
    $transactionRequestType = new AnetAPI\TransactionRequestType();
    $transactionRequestType->setTransactionType("authCaptureTransaction");
    $transactionRequestType->setAmount(500);
    $transactionRequestType->setOrder($order);
    $transactionRequestType->setPayment($paymentOne);
    $transactionRequestType->setBillTo($customerAddress);
    $transactionRequestType->setCustomer($customerData);
    $transactionRequestType->addToTransactionSettings($duplicateWindowSetting);
    $transactionRequestType->addToUserFields($merchantDefinedField1);
    $transactionRequestType->addToUserFields($merchantDefinedField2);

    // Assemble the complete transaction request
    $request = new AnetAPI\CreateTransactionRequest();
    $request->setMerchantAuthentication($merchantAuthentication);
    $request->setRefId($refId);
    $request->setTransactionRequest($transactionRequestType);

    // Create the controller and get the response
    $controller = new AnetController\CreateTransactionController($request);
    $response = $controller->executeWithApiResponse(\net\authorize\api\constants\ANetEnvironment::SANDBOX);
    dd($response);

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
        } else {
            echo "Transaction Failed \n";
            $tresponse = $response->getTransactionResponse();
        
            if ($tresponse != null && $tresponse->getErrors() != null) {
                echo " Error Code  : " . $tresponse->getErrors()[0]->getErrorCode() . "\n";
                echo " Error Message : " . $tresponse->getErrors()[0]->getErrorText() . "\n";
            } else {
                echo " Error Code  : " . $response->getMessages()->getMessage()[0]->getCode() . "\n";
                echo " Error Message : " . $response->getMessages()->getMessage()[0]->getText() . "\n";
            }
        }
    } else {
        echo  "No response returned \n";
    }

    return $response;
}


}