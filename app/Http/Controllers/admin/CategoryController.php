<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classes\CategoryManager;
use App\Classes\HelperManager as Common;

class CategoryController extends Controller
{
    public function index()
    {
        $category_list = CategoryManager::getCategoryList();
        return view('dashboard.category', compact('category_list'));
    }

    public function addCategory(Request $req)
    {        
        $response = CategoryManager::add($req);
        if($response == true){
            Common::setMessage(__('category_add_success'));
        }else{
            Common::setMessage(__('category_add_failed'), 'error');
        }
        return back();
    }

    public function editCategory($id)
    {
        $category = CategoryManager::getCategoryById($id);
        $category_list = CategoryManager::getCategoryList();
        return view('dashboard.category', compact('category_list', 'category'));
    }

    public function editSubmitCategory(Request $req)
    {
        $response = CategoryManager::edit($req);
        if($response == true){
            Common::setMessage(__('category_update_success'));
            return redirect()->route('admin.category');
        }else{
            Common::setMessage(__('category_update_failed'), 'error');
        }
        return back();
    }

    public function deleteCategory($id)
    {
        $response = CategoryManager::delete($id);
        if($response == true){
            Common::setMessage(__('category_delete_success'));
        }else{
            Common::setMessage(__('category_delete_failed'), 'error');
        }
        return back();
    }
}
