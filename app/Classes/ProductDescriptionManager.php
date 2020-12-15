<?php

namespace App\Classes;

use App\Models\ProductDescription;
use App\Classes\HelperManager as Common;

class ProductDescriptionManager
{
    public static function add($req)
    {
        $data = [
            'name' => $req->name,
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
            'name' => $req->name,
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
            $category->delete();
            return true;
        } else {
            return false;
        }
    }

    public static function getCategoryList($req)
    {
        if ( $req->name !== null ) {
            $order = ProductDescription::with('image');
            if ($req->name) {
                $order->where('name', 'like', '%' . $req->name . '%');
            }
            
            return $order->orderBy('id', 'desc')->paginate(10);
        } else {
            return ProductDescription::orderBy('id', 'desc')->paginate(10);
        }
    }

    public static function getProductCategoryList()
    {
        return ProductDescription::where('status', 1)
            ->orderBy('id', 'desc')->paginate(10);
    }
    
    public static function getProductDescriptionById($id)
    {
        return ProductDescription::find($id);
    }
}
