<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
        /**
     * Load Admin Login Form.
     *
     * @return bool
     */
    public function index()
    {
        return view('admin.login');
    }

        /**
     * Check Admin ID/Password of Admin and logges in 
     *  @param $req
     * @return bool
     */
    public function loginSubmit(Request $req)
    {        
        if (Auth::guard('admin')->attempt(['email' => $req->email, 'password' => $req->password, 'menuroles' => 'admin'])) {
            return redirect()->intended('admin/dashboard');
        }
        return back()->withErrors([__('admin_login_failed')]);
    }

        /**
     * Admin Logout
     * 
     * @return bool
     */
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }
}
