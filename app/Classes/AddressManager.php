<?php

namespace App\Classes;

use App\Models\Address as AddressModel;

class AddressManager
{
    public static function add($req)
    {
        if ($response = AddressModel::create($req)) {
            return $response->getAttributes();
        } else {
            return false;
        }
    }

    public function getAddresses($userId, $type, $isTemp)
    {
        /* Change first to get to fetch multiople addresses */
        return AddressModel::where([
            'user_id'=> $userId,
            'type'=> $type,
            'temp_user'=> $isTemp
        ])
        ->orderBy('id', 'DESC')
        ->first();
        //->get();
    }
}
