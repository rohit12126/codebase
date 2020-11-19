<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Classes\OrderManager;
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
        OrderManager $orderManager
    )
    {
        $this->middleware('auth');
        $this->orderManager = $orderManager;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('frontend.profile', ['user' => $user]);
    }
    public function update(Request $request)
    {
        $user = User::find($request->id);
        $user->name       = $request->input('name');
        $user->email      = $request->input('email');
        $user->mobile      = $request->input('mobile');
        $user->save();
        return redirect()->back()->with('message', 'Profile Updated Sucessfully!');
    }
    public function account(){
        $user = Auth::user();
        $orders=$this->orderManager->getOrderByUserIdWithAddress($user->id);
        return view('frontend.account',[
            'user' => $user,
            'orders' => $orders
            ]);
    }
    public function orderDetails($order){
        $data = $this->orderManager->getOrderByOrderNUmberWithOrderAddress($order);
        return view(
            'frontend.partials.orderProductDetail',[
                'data' => $data,
            ]);
    }
    public function admin_credential_rules(array $data)
        {
        $messages = [
            'current-password.required' => 'Please enter current password',
            'password.required' => 'Please enter password',
        ];

        $validator = Validator::make($data, [
            'current-password' => 'required',
            'password' => 'required|same:password',
            'password_confirmation' => 'required|same:password',     
        ], $messages);

        return $validator;
        }  
        
    public function postCredentials(Request $request)
    {
      if(Auth::Check())
      {
        $request_data = $request->All();
        $validator = $this->admin_credential_rules($request_data);
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator->getMessageBag());
        }
        else
        {  
          $current_password = Auth::User()->password;           
          if(Hash::check($request_data['current-password'], $current_password))
          {           
            $user_id = Auth::User()->id;                       
            $obj_user = User::find($user_id);
            $obj_user->password = Hash::make($request_data['password']);
            $obj_user->save(); 
            redirect()->back()->with('message', 'Profile Updated Sucessfully!');
          }
          else
          {           
            $error = array('current-password' => 'Please enter correct current password');
            return redirect()->back()->withErrors($error);
          }
        }        
      }
      else
      {
        return redirect()->to('/account');
      }    
    }
}
