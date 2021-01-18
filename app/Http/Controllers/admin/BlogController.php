<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classes\BlogManager;
use App\Classes\BlogCategoryManager;
use App\Classes\HelperManager as Common;

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
     * Create new blog form
     * @param $req
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        $category_list = $this->blogCategoryManager->getCategoryList($req);
        return view('dashboard.blog', compact('category_list'));
    }

        /**
     * Display list of Blogs
     * @param $req
     * @return \Illuminate\Http\Response
     */
    public function blogList(Request $req)
    {
        $blog_list = $this->blogManager->getBlogListPaginated($req);
        return view('dashboard.blog_list', compact('blog_list'));
    }

        /**
     * Store a blog
     * @param $req
     * @return \Illuminate\Http\Response
     */
    public function addBlog(Request $req)
    {
        $this->validate(
            $req, 
            [
                'image' => 'required|mimes:jpeg,jpg,png|max:4000',
                'description' => 'required'
            ], [
                'description' => 'content field is required',
            ]
        );
        
        $response = $this->blogManager->add($req);
        if($response == true){
            Common::setMessage(__('blog_add_success'));
        }else{
            Common::setMessage(__('blog_add_failed'), 'error');
        }
        return redirect()->route('admin.blog.list');
    }

        /**
     * Edit blog form display details of blog
     * @param $req
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function editBlog(Request $req, $id)
    {
        
        $blog = $this->blogManager->getBlogById($id);
        $blog_list = $this->blogManager->getBlogList();
        $category_list = $this->blogCategoryManager->getCategoryList($req);
        return view('dashboard.blog', compact('blog_list', 'category_list', 'blog'));
    }

        /**
     * Update a blog
     * @param $req
     * @return \Illuminate\Http\Response
     */
    public function editSubmitBlog(Request $req)
    {
        $imgRequired ='';
        if(is_null($req->storeimage)) {
            $imgRequired = 'required|';
        }
        $this->validate(
            $req, 
            [
                'image' => $imgRequired.'mimes:jpeg,jpg,png|max:4000',
                'description' => 'required'
            ], [
                'description' => 'content field is required',
            ]
        );
        $response = $this->blogManager->edit($req);
        if($response == true){
            Common::setMessage(__('blog_update_success'));
            return back();
        }else{
            Common::setMessage(__('blog_update_falied'), 'error');
        }
        return redirect()->route('admin.blog.list');
    }

    /**
     * Destroy a blog
     * @param $req
     * @return \Illuminate\Http\Response
     */
    public function deleteBlog($id)
    {
        $response = $this->blogManager->delete($id);
        if($response == true){
            Common::setMessage(__('blog_delete_success'));
        }else{
            Common::setMessage(__('blog_delete_failed'), 'error');
        }
        return back();
    }

    public function checkExistSlug(Request $req)
    {
        $response = $this->blogManager->checkExistSlug($req);
        echo json_encode($response);
    }
    
}
