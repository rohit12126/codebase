<?php

namespace App\Classes;

use App\Models\Category as CategoryModel;
use App\Models\CategoryImage as CategoryImageModel;
use App\Classes\HelperManager as Common;

class CategoryManager
{
    public static function add($req)
    {
        if ($category = CategoryModel::create(['name' => $req->name, 'status'=> $req->status])) {
            if ($req->image) {
                $file_name = Common::uploadFile($req->image, 'upload/category');
                CategoryImageModel::create([
                    'category_id' => $category->id,
                    'image' => $file_name
                ]);
            }
            return true;
        } else {
            return false;
        }
    }

    public static function edit($req)
    {
        $category = null;
        if ($exist = self::getCategoryById($req->id)) {
            $category = $exist;
        } else {
            return false;
        }

        if ($category->fill(['name' => $req->name, 'status'=> $req->status])->save()) {
            if ($req->image) {
                $file_name = Common::uploadFile($req->image, 'upload/category');
                if (@$category->image !== null) {
                    $category->image->update(['image' => $file_name]);
                } else {
                    CategoryImageModel::create([
                        'category_id' => $category->id,
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
        if ($category = self::getCategoryById($id)) {
            $category->delete();
            return true;
        } else {
            return false;
        }
    }

    public static function getCategoryList($req)
    {
        if ( $req->name !== null ) {
            $order = CategoryModel::with('image');
            if ($req->name) {
                $order->where('name', 'like', '%' . $req->name . '%');
            }
            
            return $order->orderBy('id', 'desc')->paginate(10);
        } else {
            return CategoryModel::with('image')->orderBy('id', 'desc')->paginate(10);
        }
    }

    public static function getCategoryById($id)
    {
        return CategoryModel::with('image')->find($id);
    }
}
