<?php

namespace App\Classes;

use App\Models\BlogCategory;
use App\Classes\HelperManager as Common;

class BlogCategoryManager
{
        /**
     * Add Blog Category
     * @param $req
     * @return Bool
     * */
    public static function add($req)
    {
        $slug = self::generateSlug($req->name);

        if ($category = BlogCategory::create(
            ['name' => $req->name, 'status' => $req->status, 'slug'=>$slug]
        )) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Update Blog Category
     * @param $req
     * @return Bool
     * */
    public static function edit($req)
    {
        $category = null;
        if ($exist = self::getCategoryById($req->id)) {
            $category = $exist;
        } else {
            return false;
        }
        
        $slug = self::generateSlug($req->name, $req->id);

        if ($category->fill(
            ['name' => $req->name, 'status' => $req->status, 'slug'=> $slug]
        )->save()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Generates Slug for Blog Category
     * @param $name
     * @param $catId (Category Id)
     * @param $recall
     * @return $slug
     * */
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

    /**
     * Checks for existing Blog Category slug
     * @param $req
     * @return Bool
     * */
    public static function checkExistSlug($slug, $catId = 0)
    {
        if (!empty($catId)) {
            $category = BlogCategory::where('slug', '=', $slug)
                ->where('id', '!=', $catId)
                ->first();
        } else {
            $category = BlogCategory::where('slug', '=', $slug)->first();
        }

        if (!is_null($category)) {
            return true;
        } else {
            /* slug not exist */
            return false;
        }
    }

    /**
     * Delete Blog Category
     * @param $id
     * @return Bool
     * */
    public static function delete($id)
    {
        if ($category = self::getCategoryById($id)) {
            $category->delete();
            return true;
        } else {
            return false;
        }
    }

        /**
     * Filters and Get Blog Category
     * @param $req
     * @return response
     * */
    public static function getCategoryList($req)
    {
        if ( $req->name !== null ) {
            $order = BlogCategory::where('name', 'like', '%' . $req->name . '%');
            return $order->orderBy('id', 'desc')->paginate(10);
        } else {
            return BlogCategory::orderBy('id', 'desc')->paginate(10);
        }
    }

        /**
     * Blog Category list
     * @param 
     * @return Response
     * */
    public static function getBlogCategoryList()
    {
        return BlogCategory::where('status',1)->orderBy('id', 'desc')->paginate(10);
    }

        /**
     * Get Blog Category by Id
     * @param $id
     * @return Response
     * */
    public static function getCategoryById($id)
    {
        return BlogCategory::find($id);
    }
}
