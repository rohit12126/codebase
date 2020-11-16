<?php

namespace App\Classes;

use App\Models\Category as CategoryModel;
use App\Models\CategoryImage as CategoryImageModel;
use App\Classes\HelperManager as Common;

class CategoryManager
{
    public static function add($req)
    {
        if ($category = CategoryModel::create(['name' => $req->name])) {
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

        if ($category->fill(['name' => $req->name])->save()) {
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

    public static function getCategoryList()
    {
        return CategoryModel::with('image')->get();
    }

    public static function getCategoryById($id)
    {
        return CategoryModel::with('image')->find($id);
    }
}
