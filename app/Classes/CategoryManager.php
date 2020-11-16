<?php

namespace App\Classes;

use App\Models\Category as CategoryModel;
use App\Models\CategoryImage as CategoryImageModel;
use App\Classes\HelperManager as Common;

class CategoryManager
{
    public static function add($req)
    {
        if($category = CategoryModel::create(['name' => $req->name])){
            if($req->image){
                $file_name = Common::uploadFile($req->image, 'upload/category');
                CategoryImageModel::create([
                    'category_id' => $category->id,
                    'image' => $file_name
                    ]);
            }
            return true;
        }else{
            return false;
        }
        
    }

    public static function getCategoryList()
    {
        return CategoryModel::with('image')->get();
    }
}
