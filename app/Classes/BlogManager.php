<?php

namespace App\Classes;

use App\Models\Blog as BlogModel;
use App\Classes\HelperManager as Common;
use DB;
class BlogManager
{
    public static function add($req)
    {
        $description = $req->input('description');

        libxml_use_internal_errors(true);

        $dom = new \DomDocument();

        $dom->loadHtml($description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);    

        $images = $dom->getElementsByTagName('img');

        foreach($images as $k => $img){

            $data = $img->getAttribute('src');

            list($type, $data) = explode(';', $data);

            list(, $data)      = explode(',', $data);

            $data = base64_decode($data);

            $image_name = time().$k.'.png';
            
            $file_name = Common::uploadFile($req->image, 'upload/blog/content');

            $path = url('upload/blog/content/') . $image_name;

            $img->removeAttribute('src');

            $img->setAttribute('src', $path);
        }

        $description = $dom->saveHTML();

        $file_name = "";
        if ($req->image) {
            $file_name = Common::uploadFile($req->image, 'upload/blog');
        }
        $data = [
            'category_id' => $req->category_id,
            'title' => $req->title,
            'slug' => $req->slug,
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
        
        if ($blog->fill($data)->save()) {
            return true;
        } else {
            return false;
        }
    }

    public static function checkExistSlug($req)
    {
        if (!empty($req->blogId)) {
            $blog = BlogModel::where('slug', '=', $req->slug)
                ->where('id', '!=', $req->blogId)
                ->first();
        } else {
            $blog = BlogModel::where('slug', '=', $req->slug)->first();
        }

        if (!is_null($blog)) {
            /* slug exist */
            $response = array(
                'status' => true,
                'message' => "Slug is exist!"
            );
        } else {
            /* slug not exist */
            $response = array(
                'status' => false,
                'message' => "Slug not found!"
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
        if ( $req->title !== null ) {
            $order = BlogModel::where('title', 'like', '%' . $req->title . '%');
            return $order->orderBy('id', 'desc')->paginate(10);
        } else {
            return BlogModel::orderBy('id', 'desc')->paginate(10);
        }
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
