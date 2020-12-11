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
            $original_name = "images.".$file->getClientOriginalExtension();
            $file_name = time().'_file_'.rand(100,999).$original_name;

            $image_resize = Image::make($file->getRealPath());              
            $image_resize->save(base_path($file_path).'/'.$file_name);
            return $file_name ;
        }
    }

    public static function parseEditorContentAndImages($content, $imgPath) {
        libxml_use_internal_errors(true);

        $dom = new \DomDocument();

        $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);    

        $images = $dom->getElementsByTagName('img');

        foreach($images as $k => $img){

            $data = $img->getAttribute('src');
            
            if (filter_var($data, FILTER_VALIDATE_URL)) {
                continue;
            } 
            list($type, $data) = explode(';', $data);

            list(, $data)      = explode(',', $data);

            $data = base64_decode($data);

            $image_name = $imgPath.time().$k.'.png';
            
            $path =  $image_name;

            file_put_contents($path, $data);

            $img->removeAttribute('src');

            $img->setAttribute('src', url('/').'/'.$path);
        }

        return $dom->saveHTML();
    }
}