<?php

namespace App\Classes;

use App\Models\Product as ProductModel;
use App\Models\ProductImage as ProductImageModel;
use App\Classes\HelperManager as Common;

class ProductManager
{
    public static function add($req)
    {
        $data = [
            'name' => $req->name,
            'category_id' => $req->category_id,
            'purchase_price' => $req->purchase_price,
            'sale_price' => $req->sale_price,
            'stock_qty' => $req->stock_qty,
            'description' => $req->description,
        ];
        if ($product = ProductModel::create($data)) {
            if ($req->image) {
                foreach ($req->image as $image) {
                    $file_name = Common::uploadFile($image, 'upload/product');
                    ProductImageModel::create([
                        'product_id' => $product->id,
                        'image' => $file_name
                    ]);
                }
            }
            return true;
        } else {
            return false;
        }
    }

    public static function edit($req)
    {
        $category = null;
        if ($exist = self::getProductById($req->id)) {
            $category = $exist;
        } else {
            return false;
        }

        if ($category->fill(['name' => $req->name])->save()) {
            if ($req->image) {
                $file_name = Common::uploadFile($req->image, 'upload/product');
                if (@$category->image !== null) {
                    $category->image->update(['image' => $file_name]);
                } else {
                    ProductImageModel::create([
                        'product_id' => $category->id,
                        'image' => $file_name
                    ]);
                }
            }
            return true;
        } else {
            return false;
        }
    }

    public static function delete($id)
    {
        if ($category = self::getProductById($id)) {
            $category->delete();
            return true;
        } else {
            return false;
        }
    }

    public static function getProductList()
    {
        return ProductModel::with('images')->get();
    }

    public static function getProductById($id)
    {
        return ProductModel::with('images')->find($id);
    }
}
