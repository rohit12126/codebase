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

    public function index()
    {
        $category_list = $this->blogCategoryManager->getCategoryList();
        return view('dashboard.blog', compact('category_list'));
    }

    public function blogList(Request $req)
    {
        $blog_list = $this->blogManager->getBlogListPaginated($req);
        return view('dashboard.blog_list', compact('blog_list'));
    }

    public function addBlog(Request $req)
    {
        $response = $this->blogManager->add($req);
        if($response == true){
            Common::setMessage(__('blog_add_success'));
        }else{
            Common::setMessage(__('blog_add_failed'), 'error');
        }
        return redirect()->route('admin.blog.list');
    }

    public function editBlog($id)
    {
        
        $blog = $this->blogManager->getBlogById($id);
        $blog_list = $this->blogManager->getBlogList();
        $category_list = $this->blogCategoryManager->getCategoryList();
        return view('dashboard.blog', compact('blog_list', 'category_list', 'blog'));
    }

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
