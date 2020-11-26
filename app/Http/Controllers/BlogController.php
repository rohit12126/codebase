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
    public function index()
    {
        $paginate = 5;
        $blogs = $this->blogManager->getBlogs($paginate);
        return view('frontend.blog-list', ['blogs' => $blogs]);
    }

    
    /**
     * Display a Detail of the Blog.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail(Request $req) {
        $blogId = $req->input('id');
        $blog = $this->blogManager->getBlog($blogId);
        return view('frontend.blog-detail',
            ['blog' => $blog]
        );
    }
}
