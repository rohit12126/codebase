<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\BlogCategory;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blog_cat = BlogCategory::where('status', 1)->get();
        $blog = Blog::where('status', 1)->get();
        return view('once.blogs') 
        ->with('blogs', $blog)
        ->with('blog_cats', $blog_cat);
    }

    public function category($cat_name)
    {
        //dd($cat_name);
        $cat = BlogCategory::where('cat_link', $cat_name)->where('status', 1)->first();
        if(empty($cat)) 
        {
            session()->flash('alert-error', 'No category found.');
            return redirect('blogs');
        }
        $blog_cat = BlogCategory::where('status', 1)->get();
        $blog = Blog::where('status', 1)->where('menu_id',
        function($query) use ($cat_name){
            $query->select('id')
            ->from(with(new BlogCategory)->getTable())
            ->where('cat_link', $cat_name)
            ->where('status', 1)
            ->limit(1);
        }
        )->get();
        return view('once.blogs') 
        ->with('blogs', $blog)
        ->with('breadcrumb', $cat)
        ->with('blog_cats', $blog_cat)
        ;
    }

    public function showBlog($blog_link)
    {
        $blog = Blog::where('status', 1)->where('blog_link', $blog_link)->first();
        if(empty($blog)) 
        {
            session()->flash('alert-error', 'No blog found.');
            return redirect('blogs');
        }

        $blog_cat = BlogCategory::where('status', 1)->get();
        return view('once.blog_details')
        ->with('blog', $blog) 
        ->with('blog_cats', $blog_cat)       
        ;
    }
}
