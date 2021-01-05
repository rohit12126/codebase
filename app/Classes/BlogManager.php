<?php

namespace App\Classes;

use App\Models\Blog as BlogModel;
use App\Models\BlogCategory;
use App\Classes\HelperManager as Common;
use DB;
class BlogManager
{
    public static function add($req)
    {
        $description = Common::parseEditorContentAndImages($req->input('description'), 'upload/blog/content/');

        $file_name = "";
        if ($req->image) {
            $file_name = Common::uploadFile($req->image, 'upload/blog');
        }

        $slug = self::generateSlug($req->title);

        $data = [
            'category_id' => $req->category_id,
            'title' => $req->title,
            'slug' => $slug,
            'description' => $description,
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
        $description = Common::parseEditorContentAndImages($req->input('description'), 'upload/blog/content/');

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
        
        $slug = self::generateSlug($req->title, $req->id);

        $data = [
            'category_id' => $req->category_id,
            'title' => $req->title,
            'slug' => $slug,
            'description' => $description,
            'image' => $file_name,
            'status' => $req->status
        ];
        
        if ($blog->fill($data)->save()) {
            return true;
        } else {
            return false;
        }
    }

    public static function generateSlug($name, $blogId = 0, $recall = false) {
        $slug = Common::generateSlug($name);
        
        if ($recall) {
            $slug = $slug . '-' . rand(1,999);
        }

        $isExist = self::checkExistSlug($slug, $blogId);
        
        if ($isExist) {
          $slug = self::generateSlug($name, $blogId, true);
          return $slug;
        } 

        return $slug;
    }

    public static function checkExistSlug($slug, $blogId = 0)
    {
        if (!empty($blogId)) {
            $blog = BlogModel::where('slug', '=', $slug)
                ->where('id', '!=', $blogId)
                ->first();
        } else {
            $blog = BlogModel::where('slug', '=', $slug)->first();
        }

        if (!is_null($blog)) {
            return true;
        } else {
            /* slug not exist */
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
        if ( $req->title !== null ) {
            $order = BlogModel::where('title', 'like', '%' . $req->title . '%');
            return $order->orderBy('id', 'desc')->paginate(10);
        } elseif($req->status == 'active' ){
            return BlogModel::orderBy('id', 'desc')->where('status', 1)->paginate(10);
        } {
            return BlogModel::orderBy('id', 'desc')->paginate(10);
        }
    }

    public static function getBlogById($id)
    {
        return BlogModel::find($id);
    }

    public function getBlogs($categoryId = '')
    {
        $blogs = BlogModel::with('catergory');
        if (!empty($categoryId)) {
            $blogs = $blogs->where('category_id', $categoryId);
        }
        $blogs = $blogs->where('status', 1)
            ->paginate(10);
        return $blogs;
    }
    
    public function getBlogsByCategorySlug($catSlug)
    {
        $categoryId = '';
        $category = BlogCategory::where('slug', $catSlug)->first();

        if(!empty($category)) {
            $categoryId = $category->id;
        }

        $blogs = BlogModel::with('catergory');
        if (!empty($categoryId)) {
            $blogs = $blogs->where('category_id', $categoryId);
        }
        $blogs = $blogs->where('status', 1)
            ->orderBy("created_at" ,  'DESC')
            ->paginate(10);
        return $blogs;
    }
    
    public function getBlog($blogId)
    {
        $blog = BlogModel::with('catergory')->where('status', 1)->find($blogId);
        return $blog;
    }

    public function getBlogBySlug($slug)
    {
        $blog = BlogModel::with('catergory')
            ->where('slug', $slug)
            ->where('status', 1)
            ->first();
        if (is_null($blog)){
            return false;
        }
        return $blog;
    }

    public function getRecentBlogs($blogId)
    {
        $recentBlogs = BlogModel::with('catergory')
            ->where('id', '!=', $blogId)
            ->where('status', 1)
            ->latest()
            ->take(3)
            ->get();
        return $recentBlogs;
    }
}
