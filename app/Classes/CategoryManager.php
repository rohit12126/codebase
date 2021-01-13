<?php

namespace App\Classes;

use App\Models\Category as CategoryModel;
use App\Models\CategoryImage as CategoryImageModel;
use App\Classes\HelperManager as Common;

class CategoryManager
{
    public static function add($req)
    {
        $slug = self::generateSlug($req->name);
        
        if ($category = CategoryModel::create(['name' => $req->name, 'status'=> $req->status, 'slug'=> $slug])) {
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

        $slug = self::generateSlug($req->name, $req->id);

        if ($category->fill(['name' => $req->name, 'status'=> $req->status, 'slug'=> $slug])->save()) {
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

    public static function generateSlug($name, $catId = 0, $recall = false) {
        $slug = Common::generateSlug($name);
        
        if ($recall) {
            $slug = $slug . '-' . rand(1,999);
        }

        $isExist = self::checkExistSlug($slug, $catId);
        
        if ($isExist) {
          $slug = self::generateSlug($name, $catId, true);
          return $slug;
        } 

        return $slug;
    }

    public static function checkExistSlug($slug, $catId = 0)
    {
        if (!empty($catId)) {
            $category = CategoryModel::where('slug', '=', $slug)
                ->where('id', '!=', $catId)
                ->first();
        } else {
            $category = CategoryModel::where('slug', '=', $slug)->first();
        }

        if (!is_null($category)) {
            return true;
        } else {
            /* slug not exist */
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
    public static function getActiveCategoryList($req)
    {
        if ( $req->name !== null ) {
            $order = CategoryModel::with('image');
            if ($req->name) {
                $order->where('name', 'like', '%' . $req->name . '%');
            }
            
            return $order->orderBy('id', 'desc')->paginate(10);
        } else {
            return CategoryModel::with('image')->where('status' , 1)->orderBy('id', 'desc')->paginate(10);
        }
    }

    public static function getProductCategoryList()
    {
        return CategoryModel::with('image')
            ->with('product')
            ->has('product')
            ->where('status', 1)
            ->orderBy('id', 'desc')->paginate(10);
    }
    
    public static function getCategoryById($id)
    {
        return CategoryModel::with('image')->find($id);
    }
}
