<?php

namespace App\Classes;

use App\Models\ProductDescription;
use App\Classes\HelperManager as Common;

class ProductDescriptionManager
{
    public static function add($req)
    {
        $data = [
            'product_id' => $req->product_id,
            'title'=> $req->title,
            'description'=> $req->description,
            'status'=> $req->status
        ];
        if ($category = ProductDescription::create($data)) {

            return true;
        } else {
            return false;
        }
    }

    public static function edit($req)
    {
        $category = null;
        if ($exist = self::getProductDescriptionById($req->id)) {
            $category = $exist;
        } else {
            return false;
        }
        $data = [
            'product_id' => $req->product_id,
            'title'=> $req->title,
            'description'=> $req->description,
            'status'=> $req->status
        ];
        if ($category->fill($data)->save()) {
            
            return true;
        } else {
            return false;
        }
    }

    public static function delete($id)
    {
        if ($productDescription = self::getProductDescriptionById($id)) {
            $productDescription->delete();
            return true;
        } else {
            return false;
        }
    }

    public static function getProductDescriptionList($req)
    {
        
        if ( $req->title !== null ) {
            
            if ($req->title) {
                $order = ProductDescription::where('title', 'like', '%' . $req->title . '%');
            }
            
            return $order->where('product_id',$req->product_id)->orderBy('id', 'desc')->paginate(10);
        } else {
            return ProductDescription::where('product_id',$req->product_id)->orderBy('id', 'desc')->paginate(10);
        }
    }

    /* public static function getProductDescriptionList()
    {
        return ProductDescription::where('status', 1)
            ->orderBy('id', 'desc')->paginate(10);
    } */
    
    public static function getProductDescriptionById($id)
    {
        return ProductDescription::find($id);
    }
}
