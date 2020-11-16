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
        dd($category_list);
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

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }
}
