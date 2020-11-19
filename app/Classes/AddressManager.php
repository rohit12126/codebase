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
}
