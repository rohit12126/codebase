<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Classes\OrderManager;
use App\Classes\CartManager;
use App\Classes\UserManager;
use App\Classes\AddressManager;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Session;





class ProfileController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        OrderManager $orderManager,
        CartManager $cartManager,
        UserManager $userManager,
        AddressManager $addressManager
    )
    {
        $this->orderManager = $orderManager;
        $this->cartManager = $cartManager;
        $this->userManager =$userManager;
        $this->addressManager = $addressManager;
    }

     /**
     * Update User Account Details
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate(
            $request, 
            [
                'email' => 'required|email|unique:users,email,'.$request->id.',id',
                'name' => 'required|max:40',
                'mobile' => 'required|required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:15|unique:users,mobile,'.$request->id.',id'
            ]
        );

        if($this->userManager->edit($request)){
            return redirect()->back()->with('message', 'Profile Updated Sucessfully!');
        }
    }
    /**
     * Get Account Details Of Logged in User
     *
     * @return \Illuminate\Http\Response
     */
    public function account() {
        
        $session = session()->all();
        
        $user = $this->userManager
                ->getCurrentUser();
        if (is_null($user)) {
            return redirect('/');
        } 
        $orders = $this->orderManager
                    ->getOrderByUserId($user->id);
        $shippingAddress =  $this->addressManager
                ->getAddresses($user->id, 1, 0);
        $billingAddress=$this->addressManager
                ->getAddresses($user->id, 2, 0);
        $this->cartManager->synchCart($user->id);

        return view('frontend.account',[
                'user' => $user,
                'orders' => $orders,
                'shippingAddress' => $shippingAddress,
                'billingAddress' => $billingAddress
            ]);
    }
    
    /**
     * Get Order Details Of OrderId
     * @param OrderId
     * @return \Illuminate\Http\Response
     */
    public function orderDetails($order){
        
        $data = $this->orderManager->getProductsByOrderNUmber($order);
        
        return view(
            'frontend.partials.orderProductDetail',[
                'data' => $data,
            ]);
    }

    /**
     * Get Order Details Of OrderId
     * @param OrderId
     * @return \Illuminate\Http\Response
     */

    public function passwordUpdateRules(array $data)
        {
        $messages = [
            'currentPassword.required' => 'Please enter current password',
            'password.required' => 'Please enter password',
        ];

        $validator = Validator::make($data, [
            'currentPassword' => 'required',
            'password' => 'required|same:password',
            'password_confirmation' => 'required|same:password',     
        ], $messages);

        return $validator;
        }
       /**
     * Update Password of user
     * @param OrderId
     * @return \Illuminate\Http\Response
     */   
    public function postCredentials(Request $request)
    {
        $request_data = $request->All();
        $validator = $this->passwordUpdateRules($request_data);
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator->getMessageBag());
        }
        else
        {  
          $current_password = Auth::User()->password;           
          if(\Hash::check($request_data['currentPassword'], $current_password))
          {           
            $user_id = Auth::User()->id;                       
            $obj_user = User::find($user_id);
            $obj_user->password = \Hash::make($request_data['password']);
            $obj_user->save(); 
            redirect()->route('account')->with('message', 'Profile Updated Sucessfully!');
          }
          else
          {           
            $error = array('currentPassword' => 'Please enter correct current password');
            return redirect()->back()->withErrors($error);
          }
        }               
    }

    public function calcelRequest(Request $request)
    {
        $validator = $this->validate(
            $request, 
            [
                'message' => 'required|min:50|max:5000',
            ]
        );
        if ($this->orderManager->ordercancelreason($request))
        {
            $order = $this->orderManager->getOrderByOrderNUmber($request->order_id);
            if($order->created_at->addDays(7) > Carbon::today())
            {
                $req = new \stdClass();
                $req->order_no = $order->order_no;
                $req->order_status = '5';
                if($this->orderManager->orderStatusChange($req))
                {
                    return  response()->json(['success' => '1']);
                }
            }
            else 
            {
                return response()->json(['error'=>'Unable to cancle this Order Please contact Support'],Response::HTTP_INTERNAL_SERVER_ERROR);
            }
        }
    }
}
