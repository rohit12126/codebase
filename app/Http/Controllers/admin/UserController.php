<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classes\UserManager;
use App\Classes\HelperManager as Common;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(Request $req)
    {
        $user_list = UserManager::getUserList($req);
        return view('dashboard.user', compact('user_list'));
    }

    public function addUser(Request $req)
    {
        $req->validate([
            'name'    => 'required|string',
            'email'    => 'required|email:rfc|unique:users,email',
            'mobile'    => 'required|string|max:15|unique:users,mobile',
            'password'    => 'required'
        ]);
        $response = UserManager::add($req);
        if ($response == true) {
            Common::setMessage(__('user_add_success'));
        } else {
            Common::setMessage(__('user_add_failed'), 'error');
        }
        return back();
    }

    public function editUser(Request $req, $id)
    {
        $user = UserManager::getUserById($id);
        $user_list = UserManager::getUserList($req);
        return view('dashboard.user', compact('user_list', 'user'));
    }

    public function editSubmitUser(Request $req)
    {
        $req->validate([
            'name'    => 'required|string',
            'email'    => 'bail|required|email:rfc|unique:users,email,' . $req->id,
            'mobile'    => 'required|string|max:15|unique:users,mobile,' . $req->id,
            'password'    => ''
        ]);
        $response = UserManager::edit($req);
        if ($response == true) {
            Common::setMessage(__('user_update_success'));
            return redirect()->route('admin.user');
        } else {
            Common::setMessage(__('user_update_failed'), 'error');
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
        if ($response == true) {
            Common::setMessage(__('user_delete_success'));
        } else {
            Common::setMessage(__('user_delete_failed'), 'error');
        }
        return back();
    }

    public function changePassword(Request $req)
    {
        if ( count($req->all()) > 0) {
            $req->validate([
                'current_password' => ['required', function ($attribute, $value, $fail) {
                    if (!\Hash::check($value, Auth::guard('admin')->user()->password)) {
                        return $fail(__('current_password_wrong'));
                    }
                }],
                'new_password'    => 'required',
                'confirm_password'    => 'required|same:new_password',
            ]);
            $response = UserManager::changePassword($req);
            if ($response == true) {
                Common::setMessage(__('password_change_success'));
            } else {
                Common::setMessage( __('password_change_failed'), 'error');
            }
            return back();
        } else {
            return view('dashboard.change_password');
        }
    }

    public function profile(Request $req)
    {
        if ( count($req->all()) > 0) {
            $req->validate([
                'name'    => 'required',
                'email'   => 'required|unique:users,email,'.$req->id
            ]);
            
            $response = UserManager::updateProfile($req);
            if ($response == true) {
                Common::setMessage(__('profile_update_success'));
            } else {
                Common::setMessage( __('profile_update_failed'), 'error');
            }
            return back();
        } else {
            $userId = Auth::guard('admin')->user()->id;
            
            $user = UserManager::getProfile($userId);
            
            return view('dashboard.profile', compact('user'));
        }
    }
    
}
