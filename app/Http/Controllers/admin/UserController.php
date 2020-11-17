<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classes\UserManager;
use App\Classes\HelperManager;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $user_list = UserManager::getUserList();
        return view('dashboard.user', compact('user_list'));
    }

    public function addUser(Request $req)
    {
        $req->validate([
            'name'	=> 'required|string',
    		'email'	=> 'required|email:rfc|unique:users,email',
            'mobile'	=> 'required|string|max:15',
            'password'	=> 'required'
        ]); 
        $response = UserManager::add($req);
        if($response == true){
            HelperManager::setMessage('User Add Successfully!');
        }else{
            HelperManager::setMessage('User Add Failed!', 'error');
        }
        return back();
    }

    public function editUser($id)
    {
        $user = UserManager::getUserById($id);
        $user_list = UserManager::getUserList();
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
        $response = UserManager::edit($req);
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
        $response = UserManager::delete($id);
        if($response == true){
            HelperManager::setMessage('User deleted Successfully!');
        }else{
            HelperManager::setMessage('User deletion Failed!', 'error');
        }
        return back();
    }
}
