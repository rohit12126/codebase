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
        $this->middleware('auth');
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
        if($this->userManager->edit($request)){
            return redirect()->back()->with('message', 'Profile Updated Sucessfully!');
        }
    }
    /**
     * Get Account Details Of Logged in User
     *
     * @return \Illuminate\Http\Response
     */
    public function account(){
        $user = $this->userManager
                ->getCurrentUser();
        $orders = $this->orderManager
                    ->getOrderByUserId($user->id);
        $shippingAddress =  $this->addressManager
                ->getAddresses($user->id,1,0);
        $billingAddress=$this->addressManager
                ->getAddresses($user->id,2,0);
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
            $obj_user->password = Hash::make($request_data['password']);
            $obj_user->save(); 
            redirect()->back()->with('message', 'Profile Updated Sucessfully!');
          }
          else
          {           
            $error = array('currentPassword' => 'Please enter correct current password');
            return redirect()->back()->withErrors($error);
          }
        }               
    }
}
