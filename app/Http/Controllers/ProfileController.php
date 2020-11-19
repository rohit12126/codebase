<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Classes\OrderManager;
use App\Classes\CartManager;
use App\Classes\UserManager;
use App\Classes\AddressManager;
use App\Classes\HelperManager;
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
     * Update Password of user
     * @param OrderId
     * @return \Illuminate\Http\Response
     */   
    public function postCredentials(Request $request)
    {
        
        if ( count($request->all()) > 0) {
            $request->validate([
                'current_password' => ['required', function ($attribute, $value, $fail) {
                    if (!\Hash::check($value, Auth::guard('admin')->user()->password)) {
                        return $fail(__('The current password is incorrect.'));
                    }
                }],
                'new_password'    => 'required',
                'confirm_password'    => 'required|same:new_password',
            ]);
            $response = UserManager::changeUserPassword($request);
            if ($response == true) {
                HelperManager::setMessage('Password Change Successfully!');
            } else {
                HelperManager::setMessage('Password could not be change!', 'error');
            }
            return back();
        } else {
            return view('frontend.account');
        }              
    }
}
