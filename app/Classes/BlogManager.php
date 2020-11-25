<?php

namespace App\Classes;

use App\Models\Blog as BlogModel;
use App\Classes\HelperManager as Common;

class BlogManager
{
    public static function add($req)
    {
        $file_name = "";
        if ($req->image) {
            $file_name = Common::uploadFile($req->image, 'upload/blog');
        }
        $data = [
            'category_id' => $req->category_id,
            'title' => $req->title,
            'description' => $req->description,
            'image' => $file_name,
            'status' => $req->status
        ];
        if ($product = BlogModel::create($data)) {
            return true;
        } else {
            return false;
        }
    }

    public static function edit($req)
    {
        $product = null;
        if ($exist = self::getBlogById($req->id)) {
            $product = $exist;
        } else {
            return false;
        }

        $file_name = Common::uploadFile($req->image, 'upload/product');

        $data = [
            'category_id' => $req->category_id,
            'title' => $req->title,
            'description' => $req->description,
            'image' => $file_name,
            'status' => (int) $req->status
        ];
        if ($product->fill($data)->save()) {
            return true;
        } else {
            return false;
        }
    }

    public static function delete($id)
    {
        if ($category = self::getBlogById($id)) {
            $category->delete();
            return true;
        } else {
            return false;
        }
    }

    public static function getBlogList()
    {
        return BlogModel::get();
    }

    public static function getBlogListPaginated($req)
    {
        return BlogModel::paginate(1);
    }

    public static function getBlogById($id)
    {
        return BlogModel::find($id);
    }

    public function getBlogs($paginate)
    {
        $blogs = BlogModel::with('catergory')->paginate($paginate);
        return $blogs;
    }

    public function getBlog($blogId)
    {
        $blog = BlogModel::with('catergory')->find($blogId);
        return $blog;
    }
}
