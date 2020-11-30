<?php

namespace App\Classes;

use App\Enquiry;
use App\Classes\HelperManager as Common;

class EnquiryManager
{
    public function add($req)
    {
        $data = [
            'name' => $req->name,
            'email' => $req->email,
            'phone_nu' => $req->phone_nu,
            'message' => $req->message
        ];
        if (Enquiry::create($data)) {
            return true;
        } else {
            return false;
        }
    }
    public static function getEnquiryListPaginated()
    {
        return Enquiry::paginate(10);
    }
}
