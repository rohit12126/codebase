<?php

namespace App\Classes;

class HelperManager
{
    public static function response($status, $msg = '', $data = array())
    {
        if( (is_array($data) || is_object($data)) && count($data) == 0)
            return response(['status' => $status, 'message' => $msg]);
        else
            return response(['status' => $status, 'message' => $msg, 'data' => $data]);
    }
    
    public static function setMessage($msg, $type='success')
    {
        if($type == 'success')
            session()->flash('alert-success', $msg);
        else
            session()->flash('alert-error', $msg);
    }
}