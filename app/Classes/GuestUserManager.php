<?php

namespace App\Classes;

use App\Models\GuestUser;
use App\Classes\HelperManager as Common;
use Illuminate\Support\Facades\Auth;

class GuestUserManager
{

    /**
     * Add product to cart (Increase product qty to cart)
     *
     */
    public function getUserId()
    {
        if (session()->has('tempUserId')) {
            return session('tempUserId');
        } else {
            $temp = time();
            $user = GuestUser::create([
                'name'=> $temp."Temp User",
                'email'=> $temp."temp@gmail.com",
                'mobile'=> 1234567890,
            ]);
            
            session(['tempUserId' => $user->id]);
            return $user->id;
        }
    }
}
