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
        if($req->password !== null){
            $data['password'] = bcrypt($req->password);
        }
        if($user->fill($data)->update()){
            return true;
        }else{
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

    public static function getUserList()
    {
        return UserModel::where('menuroles', 'user')->get();
    }

    public static function getUserById($id)
    {
        return UserModel::find($id);
    }
    public static function getCurrentUser(){
        return Auth::user();
    }
}
