<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classes\BlogCategoryManager;
use App\Classes\HelperManager as Common;

class BlogCategoryController extends Controller
{
    /**
     * Display a list of blog categories.
     * @param $req
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        $category_list = BlogCategoryManager::getCategoryList($req);
        return view('dashboard.blog-category', compact('category_list'));
    }

    /**
     * Creates new blog Categories.
     * @param $req
     * @return \Illuminate\Http\Response
     */
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

    /**
     * list details of a category.
     * @param $req
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function editCategory(Request $req, $id)
    {
        $category = BlogCategoryManager::getCategoryById($id);
        $category_list = BlogCategoryManager::getCategoryList($req);
        return view('dashboard.blog-category', compact('category_list', 'category'));
    }
    
    /**
     * Update a blog category
     * @param $req
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Delete a blog category
     * @param $id
     * @return \Illuminate\Http\Response
    */
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
