<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\BlogCategory;
use App\Models\Blog;
use Image;

class BlogController extends Controller
{
    public function category(Request $req, $id = 0)
    {
        if($_POST)
        {  
            //dd($req->all())         ;
            if($id > 0)
                $menu = BlogCategory::find($id);
            else
                $menu = new BlogCategory;
            $menu->cat_name = $req->name;
            $menu->cat_link = str_replace(' ', '-', strtolower($req->name));
            $menu->status = 1;
            if($menu->save())
            {
                $req->session()->flash('alert-success', 'Category '. (($id > 0) ? 'updated' : 'created'). ' successfully!');
            }else{
                $req->session()->flash('alert-error', 'Category '. (($id > 0) ? 'updated' : 'created'). ' failed!');
            }
            return redirect('/admin/blog-category/');
        }
        $menu = BlogCategory::get();
        if($id > 0)
            $edit = BlogCategory::where('id', '=', $id)->where('status', '=', 1)->first();
        //dump($edit->menu_name);    
        return view('admin.blog_category', array('menu_list' => $menu, 'edit' => @$edit));
    }

    public function categoryStatusChange($id)
    {
        if($id > 0)
        { 
            $menu = BlogCategory::where('id', $id)->get()->first();
            if(isset($menu->status))
            {
                $status = ($menu->status == 1) ? 0 : 1;
                $u = BlogCategory::find($id);
                $u->status = $status;
                $u->save();
                session()->flash('alert-success', 'Status Changed Successfully!');
            }
        }
        return redirect('admin/blog-category');
    }

    public function blog(Request $req, $id = 0)
    {
        if($_POST)
        {
            if($id > 0)
            $menu = Blog::find($id);
            else
            $menu = new Blog;        
           // 0 => "id"
            $menu->menu_id  = $req->menu;
            $menu->title    = $req->title;
            $menu->short_desc    = $req->short_desc;
            $menu->description  = $req->desctiption;
            $menu->m_keyword    = $req->meta_key;
            $menu->m_des    = $req->meta_desc;
            $menu->breadcrum    = $req->breadcrum;
            $menu->blog_link = str_replace(' ', '-', strtolower($req->breadcrum));        

            if($req->thumbnail)
            {
                $site_favicon = time().'_blog_thumbnail_'.$req->file('thumbnail')->getClientOriginalName();
                //$req->thumbnail->move(, $site_favicon);
                $menu->thumbnail  = $site_favicon ;
                
                $thumb_img = Image::make($req->file('thumbnail')->getRealPath())->resize(228, 190);
                $thumb_img->save(base_path('../upload/blog').'/'.$site_favicon,100);
               // Image::make(base_path('../upload/blog').'/'.$site_favicon)->resize(228, 190);
            }

            if($req->banner)
            {
                $banner = time().'_blog_banner_'.$req->file('banner')->getClientOriginalName();
                $req->banner->move(base_path('../upload/blog'), $banner);
                $menu->banner  = $banner;
            }
            
            $menu->status = 1;
            if($menu->save())
            {
                $req->session()->flash('alert-success', 'Blog '. (($id > 0) ? 'updated' : 'created'). ' successfully!');
            }else{
                $req->session()->flash('alert-error', 'Blog '. (($id > 0) ? 'updated' : 'created'). ' failed!');
            }
            return redirect('/admin/manage-blog/');
        }

        $menu = BlogCategory::where('status', '=', 1)->get();

        $pages = Blog::get();
        if($id > 0)
            $edit = Blog::where('status', '=', 1)->where('id', '=', $id)->first();
        return view('admin.blog_manage', array('menu_list' => $menu, 'edit' => @$edit, 'page_list' => $pages));
    }
    
    public function blogStatusChange($id = 0)
    {
        if($id > 0)
        { 
            $menu = Blog::where('id', $id)->get()->first();
            if(isset($menu->status))
            {
                $status = ($menu->status == 1) ? 0 : 1;
                $u = Blog::find($id);
                $u->status = $status;
                $u->save();
                session()->flash('alert-success', 'Status Changed Successfully!');
            }
        }
        return redirect('admin/manage-blog');
    }
}
