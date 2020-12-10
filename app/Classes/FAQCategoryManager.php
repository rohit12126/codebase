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
            Faq::where('category', $id)->update(['category' => self::getCategoryLatestId()]);
            $category->delete();
            return true;
        } else {
            return false;
        }
    }

    public static function getCategoryList($req)
    {
        if ( $req->name !== null ) {
            $order = FaqCategory::where('category', 'like', '%' . $req->name . '%');
            return $order->orderBy('id', 'desc')->paginate(10);
        } else {
            return FaqCategory::orderBy('id', 'desc')->paginate(10);
        }
        return FaqCategory::get();
    }

    public static function getCategoryById($id)
    {
        return FaqCategory::find($id);
    }
    public static function getCategoryLatestId()
    {
        return FaqCategory::latest()->first()->id;
    }
}
