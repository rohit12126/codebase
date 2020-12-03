<?php

namespace App\Classes;
use Image;

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

    public static function uploadFile($file, $file_path)
    {
        if(!is_null($file))
        {
            $file_name = time().'_file_'.$file->getClientOriginalName();

            $image_resize = Image::make($file->getRealPath());              
            // $image_resize->resize(1356, 450);
            $image_resize->save(base_path($file_path).'/'.$file_name);
            return $file_name ;
        }
    }
}