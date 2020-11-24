<?php
   
namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
use Stripe;
use App\Classes\HelperManager as Common;
use App\Classes\CartManager;
   
class StripePaymentController extends Controller
{
    public function __construct(
        CartManager $cartManager
    )
    {
        $this->cartManager = $cartManager;
    }
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {  
        return view('frontend.stripe',
        [
            'amount' => $this->cartManager->subTotal(),
        ]);
    }
  
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey('sk_test_51HooUMEENLBkKA9ULKoCIWtGpkgwW5Fb5tF5eMZkb1GDZszhJ5UEc2N28jyEht6JDPxTPD9Mg3XavotEiNvyuD1200m5OLE3Pc');
        Stripe\Charge::create ([
                "amount" => $this->cartManager->subTotal(),
                "currency" => "INR",
                "source" => $request->stripeToken,
                "description" => "Chapter 247",
        ]);
        
        Common::setMessage('Payment successful!');
          
        dd('Payment done You can redirect to relevent page');
    }
}