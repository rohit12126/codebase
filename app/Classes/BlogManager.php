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
            'slug' => $req->slug,
            'description' => $req->description,
            'image' => $file_name,
            'status' => $req->status
        ];
        if ($blog = BlogModel::create($data)) {
            return true;
        } else {
            return false;
        }
    }

    public static function edit($req)
    {
        $blog = null;
        if ($exist = self::getBlogById($req->id)) {
            $blog = $exist;
        } else {
            return false;
        }

        if ($req->hasFile('image')) {
            
            $file_name = Common::uploadFile($req->image, 'upload/blog');
        } else {
            $file_name =  $req->storeimage;
        }
        

        $data = [
            'category_id' => $req->category_id,
            'title' => $req->title,
            'slug' => $req->slug,
            'description' => $req->description,
            'image' => $file_name,
            'status' => $req->status
        ];
        
        if ($product->fill($data)->save()) {
            return true;
        } else {
            return false;
        }
    }

    public static function checkExistSlug($req)
    {
        if (!empty($req->id)) {
            $blog = BlogModel::where('slug', '=', $req->slug)
                ->where('id', '!=', $req->id)
                ->first();
        } else {
            $blog = BlogModel::where('slug', '=', $req->slug)->first();
        }

        if ($blog->isNotEmpty()) {
            /* slug exist */
            $response = array(
                'status' => true,
                'message' => "Slug is already in exist!"
            );
        } else {
            /* slug not exist */
            $response = array(
                'status' => false,
                'message' => "Slug is available for use!"
            );
        }
        return $response;
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
        return BlogModel::paginate(10);
    }

    public static function getBlogById($id)
    {
        return BlogModel::find($id);
    }

    public function getBlogs()
    {
        $blogs = BlogModel::with('catergory')->paginate(10);
        return $blogs;
    }

    public function getBlog($blogId)
    {
        $blog = BlogModel::with('catergory')->find($blogId);
        return $blog;
    }
}
