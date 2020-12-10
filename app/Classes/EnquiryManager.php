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
    public static function getEnquiryListPaginated($req)
    {
       // name,email,phone,connected
        if (
            $req->name !== null
            || $req->email !== null
            || $req->phone !== null
            || $req->connected !== null
        ) {
            $order = new Enquiry;
            if ($req->product_status) {
                $order->where('status', $req->product_status);
            }
            if($req->product_name){
                $order->where('name', 'like', '%' . $req->product_name . '%');
            }
            
            return $order->orderBy('id', 'desc')->paginate(10);
        } else {
            return Enquiry::orderBy('id', 'desc')->paginate(10);
        }
    }
    public static function contected($id)
    {
        return Enquiry::where('id',$id)->update(['connected' => true]);
    }
}
