<?php

namespace App\Classes;

use App\User as UserModel;
use App\Classes\HelperManager as Common;
use Illuminate\Support\Facades\Auth;


class UserManager
{
    public static function add($req)
    {
        $data = [
            'email' => $req->email,
            'name' => $req->name,
            'mobile' => $req->mobile,
            'password' => bcrypt($req->password),
        ];
        if (UserModel::create($data)) {
            return true;
        } else {
            return false;
        }
    }

    public static function edit($req)
    {
        $user = self::getUserById($req->id);
        $data = [
            'email' => $req->email,
            'name' => $req->name,
            'mobile' => $req->mobile,
        ];
        if ($req->password !== null) {
            $data['password'] = bcrypt($req->password);
        }
        if ($user->fill($data)->update()) {
            return true;
        } else {
            return false;
        }
    }

    public static function updateTempUser($userId, $email, $name, $mobile)
    {
        $user = self::getUserById($userId);
        $data = [
            'email' => $email,
            'name' => $name,
            'mobile' => $mobile,
        ];
        
        if ($user->fill($data)->update()) {
            return true;
        } else {
            return false;
        }
    }

    public static function delete($id)
    {
        if ($user = self::getUserById($id)) {
            $user->delete();
            return true;
        } else {
            return false;
        }
    }

    public static function changePassword($req)
    {
        $user = Auth::guard('admin')->user();
        if ($user->fill(['password' => bcrypt($req->new_password)])->update()) {
            return true;
        } else {
            return false;
        }
    }
    public static function changeUserPassword($req)
    {
        $user = self::getCurrentUser();
        if ($user->fill(['password' => bcrypt($req->new_password)])->update()) {
            return true;
        } else {
            return false;
        }
    }

    public static function getProfile($userId) {
        
        return UserModel::where('id', $userId)->first();
    }

    public static function updateProfile($req) {

        $user = self::getUserById($req->id);
        $data = [
            'name' => $req->name,
            'email' => $req->email
        ];
        
        if ($user->fill($data)->update()) {
            return true;
        } else {
            return false;
        }
    }

    public static function getUserList($req)
    {
        if (
            $req->email !== null
            || $req->name !== null
        ) {
            $order = UserModel::where('menuroles', 'user')
                ->where('is_temp', 0);
            if ($req->name) {
                $order->where('name', 'like', '%' . $req->name . '%');
            }
            if($req->email){
                $order->where('email', 'like', '%' . $req->email . '%');
            }
            
            return $order->orderBy('id', 'desc')->paginate(10);
        } else {
            return UserModel::where('menuroles', 'user')
                ->where('is_temp', 0)
                ->orderBy('id', 'desc')
                ->paginate(10);
        }
    }

    public static function getUserById($id)
    {
        return UserModel::find($id);
    }
    public static function getCurrentUser()
    {
        return Auth::user();
    }
}
