<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Classes\BlogManager;
use App\Classes\BlogCategoryManager;

class BlogController extends Controller
{
    protected $blogManager;
    protected $blogCategoryManager;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        BlogManager $blogManager,
        BlogCategoryManager $blogCategoryManager
    )
    {
        $this->blogManager = $blogManager;
        $this->blogCategoryManager = $blogCategoryManager;
    }
    /**
     * Display a listing of the Blog.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        $categoryId = $req->category_id;
        $blogsCategories = $this->blogCategoryManager->getBlogCategoryList();
        $blogs = $this->blogManager->getBlogs($categoryId); 
        return view('frontend.blog-list', [
            'blogs' => $blogs,
            'blogsCategories'=> $blogsCategories,
            'categoryId' => $categoryId
        ]);
    }

    
    /**
     * Display a Detail of the Blog.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail(Request $req) {
        $blogId = $req->input('id');
        $blog = $this->blogManager->getBlog($blogId);
        $recent = $this->blogManager->getRecentBlogs($blogId);
        return view('frontend.blog-detail',[
            'blog' => $blog,
            'recent' => $recent
        ]);
    }
}
