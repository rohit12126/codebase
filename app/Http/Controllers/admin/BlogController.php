<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classes\BlogManager;
use App\Classes\BlogCategoryManager;
use App\Classes\HelperManager as Common;

class BlogController extends Controller
{
    public function index()
    {
        $category_list = BlogCategoryManager::getCategoryList();
        return view('dashboard.blog', compact('category_list'));
    }

    public function blogList(Request $req)
    {
        $blog_list = BlogManager::getBlogListPaginated($req);
        return view('dashboard.blog_list', compact('blog_list'));
    }

    public function addBlog(Request $req)
    {
        $response = BlogManager::add($req);
        if($response == true){
            Common::setMessage(__('blog_add_success'));
        }else{
            Common::setMessage(__('blog_add_failed'), 'error');
        }
        return back();
    }

    public function editBlog($id)
    {
        $blog = BlogManager::getBlogById($id);
        $blog_list = BlogManager::getBlogList();
        $category_list = BlogCategoryManager::getCategoryList();
        return view('dashboard.blog', compact('blog_list', 'category_list', 'blog'));
    }

    public function editSubmitBlog(Request $req)
    {
        $response = BlogManager::edit($req);
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
        $response = BlogManager::delete($id);
        if($response == true){
            Common::setMessage(__('blog_delete_success'));
        }else{
            Common::setMessage(__('blog_delete_failed'), 'error');
        }
        return back();
    }
}
