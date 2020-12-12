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

    public static function getCategoryList($req)
    {
        if ( $req->name !== null ) {
            $order = BlogCategory::where('name', 'like', '%' . $req->name . '%');
            return $order->orderBy('id', 'desc')->paginate(10);
        } else {
            return BlogCategory::orderBy('id', 'desc')->paginate(10);
        }
    }

    public static function getBlogCategoryList()
    {
        return BlogCategory::where('status',1)->orderBy('id', 'desc')->paginate(10);
    }

    public static function getCategoryById($id)
    {
        return BlogCategory::find($id);
    }
}
