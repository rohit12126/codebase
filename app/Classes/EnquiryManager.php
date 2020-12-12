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
            'reason' => $req->reason,
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
        if (
            $req->name !== null
            || $req->email !== null
            || $req->phone !== null
            || $req->connected !== null
            || $req->reason !== null
        ) {
            $order = '';
            
            if ($req->name) {
                $order = Enquiry::where('name', 'like', '%' . $req->name . '%');
            }
            
            if($req->email) {
                if (!empty($order)) {
                    $order->where('email', 'like', '%' . $req->email . '%');
                } else {
                    $order = Enquiry::where('email', 'like', '%' . $req->email . '%');
                }
            }

            if($req->phone){
                if (!empty($order)) {
                    $order->where('phone_nu', 'like', '%' . $req->phone . '%');
                } else {
                    $order = Enquiry::where('phone_nu', 'like', '%' . $req->phone . '%');
                }
            }
            
            if($req->reason){
                if (!empty($order)) {
                    $order->where('reason', $req->reason);
                } else {
                    $order = Enquiry::where('reason', $req->reason);
                }
            }
            
            if($req->connected) {
                $connected = $req->connected;
                if ($req->connected == 2) {
                    $connected = 0;
                }

                if (!empty($order)) {
                    $order->where('connected', $connected);
                } else {
                    $order = Enquiry::where('connected', $connected);
                }
            }

            if (!empty($order)) {
                return $order->orderBy('id', 'desc')->paginate(10);
            } else {
                return Enquiry::orderBy('id', 'desc')->paginate(10);
            }
        } else {
            return Enquiry::orderBy('id', 'desc')->paginate(10);
        }
    }
    public static function contected($id)
    {
        return Enquiry::where('id',$id)->update(['connected' => true]);
    }
}
