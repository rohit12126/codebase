<?php

namespace App\Classes;

use App\Models\Address as AddressModel;

class AddressManager
{
    /**
     * Add address 
     * @param $req
     * @return Bool
     * 
     */
    public static function add($req)
    {
        if ($response = AddressModel::create($req)) {
            return $response->getAttributes();
        } else {
            return false;
        }
    }

    /**
     * Get Address
     * @param $userId
     * @param $type Address Type(Shipping/Billing)
     * @param $isTemp (Check for temp user)
     * @return Bool
     * */
    public function getAddresses($userId, $type, $isTemp)
    {
        /* Change first to get to fetch multiple addresses */
        return AddressModel::where([
            'user_id'=> $userId,
            'type'=> $type,
            'temp_user'=> $isTemp
        ])
        ->orderBy('id', 'DESC')
        ->first();
    }

        /**
     * Get Address By Address Id
     * @param $id
     * @return response
     * */
    public function getAddressesbyId($id)
    {
        return AddressModel::find($id);
    }
}
