<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classes\BlogCategoryManager;
use App\Classes\HelperManager as Common;

class BlogCategoryController extends Controller
{
    public function index(Request $req)
    {
        $category_list = BlogCategoryManager::getCategoryList($req);
        return view('dashboard.blog-category', compact('category_list'));
    }

    public function addCategory(Request $req)
    {        
        $response = BlogCategoryManager::add($req);
        if($response == true){
            Common::setMessage(__('blog_category_add_success'));
        }else{
            Common::setMessage(__('blog_category_add_failed'), 'error');
        }
        return back();
    }

    public function editCategory(Request $req, $id)
    {
        $category = BlogCategoryManager::getCategoryById($id);
        $category_list = BlogCategoryManager::getCategoryList($req);
        return view('dashboard.blog-category', compact('category_list', 'category'));
    }

    public function editSubmitCategory(Request $req)
    {
        $response = BlogCategoryManager::edit($req);
        if($response == true){
            Common::setMessage(__('blog_category_update_success'));
            return redirect()->route('admin.blog.category');
        }else{
            Common::setMessage(__('blog_category_update_failed'), 'error');
        }
        return back();
    }

    public function deleteCategory($id)
    {
        $response = BlogCategoryManager::delete($id);
        if($response == true){
            Common::setMessage(__('blog_category_delete_success'));
        }else{
            Common::setMessage(__('blog_category_delete_failed'), 'error');
        }
        return back();
    }
}
