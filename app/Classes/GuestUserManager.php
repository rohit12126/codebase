<?php

namespace App\Classes;

use App\Models\GuestUser;
use App\User as UserModel;
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
            $user = UserModel::create([
                'name'=> $temp."Temp User",
                'email'=> $temp."temp@gmail.com",
                'mobile'=> $temp,
                'menuroles' => 'user',
                'is_temp'=> 1
            ]);
            
            session(['tempUserId' => $user->id]);
            return $user->id;
        }
    }

    public static function getUser($userId)
    {
        $user = UserModel::where('id', $userId)
            ->where('is_temp', 1)
            ->first();
        
        return $user;
    }
}
