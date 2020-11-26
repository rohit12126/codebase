<?php

namespace App\Classes;

use App\Models\BlogCategory;
use App\Classes\HelperManager as Common;

class BlogCategoryManager
{
    public static function add($req)
    {
        if ($category = BlogCategory::create(
            ['name' => $req->name, 'status' => $req->status]
        )) {
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

        if ($category->fill(
            ['name' => $req->name, 'status' => $req->status]
        )->save()) {
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
        return BlogCategory::get();
    }

    public static function getCategoryById($id)
    {
        return BlogCategory::find($id);
    }
}
