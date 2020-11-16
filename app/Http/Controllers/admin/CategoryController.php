<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Classes\CategoryManager;
use App\Classes\HelperManager;

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
            HelperManager::setMessage('Category Add Successfully!');
        }else{
            HelperManager::setMessage('Category Add Failed!', 'error');
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
            HelperManager::setMessage('Category Updated Successfully!');
            return redirect()->route('admin.category');
        }else{
            HelperManager::setMessage('Category Update Failed!', 'error');
        }
        return back();
    }

    public function deleteCategory($id)
    {
        $response = CategoryManager::delete($id);
        if($response == true){
            HelperManager::setMessage('Category deleted Successfully!');
        }else{
            HelperManager::setMessage('Category deletion Failed!', 'error');
        }
        return back();
    }
}
