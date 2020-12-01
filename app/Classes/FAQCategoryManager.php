<?php

namespace App\Classes;

use App\FaqCategory;
use App\Classes\HelperManager as Common;
use App\Faq;


class FaqCategoryManager
{
    public static function add($req)
    {
        if ($category = FaqCategory::create(
            ['category' => $req->name, 'status' => $req->status]
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
            ['category' => $req->name, 'status' => $req->status]
        )->save()) {
            return true;
        } else {
            return false;
        }
    }

    public static function delete($id)
    {
        if ($category = self::getCategoryById($id)) {
        Faq::where('category', $id)->update(['category' => self::getCategoryFirstId()]);
            $category->delete();
            return true;
        } else {
            return false;
        }
    }

    public static function getCategoryList()
    {
        return FaqCategory::get();
    }

    public static function getCategoryById($id)
    {
        return FaqCategory::find($id);
    }
    public static function getCategoryFirstId()
    {
        return FaqCategory::first()->id;
    }
}
