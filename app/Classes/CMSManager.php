<?php

namespace App\Classes;

use App\Models\CMS;
use App\Classes\HelperManager as Common;

class CMSManager
{
    public static function add($req)
    {
        $data = [
            'title' => $req->title,
            'content' => $req->content,
            'status' => $req->status
        ];
        if ($product = CMS::create($data)) {

            return true;
        } else {
            return false;
        }
    }

    public static function edit($req)
    {
        $page = null;
        if ($exist = self::getPageById($req->id)) {
            $page = $exist;
        } else {
            return false;
        }

        $data = [
            'title' => $req->title,
            'content' => $req->content,
            'status' => $req->status
        ];

        if ($page->fill($data)->save()) {
            return true;
        } else {
            return false;
        }
    }

    public static function delete($id)
    {
        if ($category = self::getPageById($id)) {
            $category->delete();
            return true;
        } else {
            return false;
        }
    }

    public static function getPageList()
    {
        return CMS::get();
    }

    public static function getPageListPaginated($req)
    {
       return CMS::orderBy('id', 'desc')->paginate(4);
    }

    public static function getPageById($id)
    {
        return CMS::find($id);
    }

    public function getProducts($paginate)
    {
        $pages = CMS::paginate($paginate);
        return $pages;
    }

    public function getPage($pageId)
    {
        $page = CMS::find($pageId);
        return $page;
    }
}
