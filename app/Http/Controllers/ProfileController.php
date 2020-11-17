<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Classes\UserManager;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
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
        $address='';
        $orders='';
        return view('frontend.account',[
            'user' => $user
            ]);
    }
    public function resetPassword(Request $request)
    {
        $user = User::find($request->id);
        $user->name       = $request->input('name');
        $user->email      = $request->input('email');
        $user->mobile      = $request->input('mobile');
        $user->save();
        return redirect()->back()->with('message', 'Profile Updated Sucessfully!');
    }
}
