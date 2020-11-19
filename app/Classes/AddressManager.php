<?php

namespace App\Classes;

use App\Models\Address as AddressModel;

class AddressManager
{
    public static function add($req)
    {
        if ($response = AddressModel::create($req->all())) {
            return $response->getAttributes();
        } else {
            return false;
        }
    }

    public function getAddresses($userId, $type, $isTemp)
    {
        $addresses = AddressModel::where([
            'user_id'=> $userId,
            'type'=> $type,
            'temp_user'=> $isTemp
        ])
        ->get();
        return $addresses;
    }
}
