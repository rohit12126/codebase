<?php

namespace App\Classes;

use App\Enquiry;
use App\Classes\HelperManager as Common;

class EnquiryManager
{
    public function store($req)
    {
        $data = [
            'name' => $req->name,
            'email' => $req->email,
            'phone_nu' => $req->phone,
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
    public static function contected($id)
    {
        return Enquiry::where('id',$id)->update(['connected' => true]);
    }
}
