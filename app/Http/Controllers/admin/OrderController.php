<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classes\OrderManager;
use App\Classes\HelperManager;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index(Request $req)
    {
        $order_list = OrderManager::getLatestPaginatedOrderList($req);
        return view('dashboard.order', compact('order_list'));
    }

    public function orderDetails($order)
    {
        $order = OrderManager::getOrderByOrderNUmberWithOrderAddress($order);
        return view('dashboard.order_details', compact('order'));
    }

    public function orderStatusChange(Request $req)
    {
        $response = OrderManager::orderStatusChange($req);
        if($response == true){
            HelperManager::setMessage('Order Status Changed Successfully!');
        }else{
            HelperManager::setMessage('Order status could not be change!', 'error');
        }
        return back();
    }

    public function addUser(Request $req)
    {
        $req->validate([
            'name'	=> 'required|string',
    		'email'	=> 'required|email:rfc|unique:users,email',
            'mobile'	=> 'required|string|max:15',
            'password'	=> 'required'
        ]); 
        $response = OrderManager::add($req);
        if($response == true){
            HelperManager::setMessage('User Add Successfully!');
        }else{
            HelperManager::setMessage('User Add Failed!', 'error');
        }
        return back();
    }

    public function editUser($id)
    {
        $user = OrderManager::getUserById($id);
        $user_list = OrderManager::getUserList();
        return view('dashboard.user', compact('user_list', 'user'));
    }

    public function editSubmitUser(Request $req)
    {
        $req->validate([
            'name'	=> 'required|string',
    		'email'	=> 'bail|required|email:rfc|unique:users,email,'.$req->id,
            'mobile'	=> 'string',
            'password'	=> ''
        ]); 
        $response = OrderManager::edit($req);
        if($response == true){
            HelperManager::setMessage('User Updated Successfully!');
            return redirect()->route('admin.user');
        }else{
            HelperManager::setMessage('User Update Failed!', 'error');
        }
        return back();
    }

    public function proxyLogin($id)
    {
        Auth::loginUsingId($id);
        return redirect(url('account'));
    }

    public function deleteUser($id)
    {
        $response = OrderManager::delete($id);
        if($response == true){
            HelperManager::setMessage('User deleted Successfully!');
        }else{
            HelperManager::setMessage('User deletion Failed!', 'error');
        }
        return back();
    }

    public function email()
    {
        return view('dashboard.email.order_confirm');
    }
}
