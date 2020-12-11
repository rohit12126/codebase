<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classes\FAQCategoryManager;
use App\Classes\HelperManager as Common;

class FaqCategoryController extends Controller
{
    public function index(Request $req)
    {
        $category_list = FAQCategoryManager::getCategoryList($req);
        return view('dashboard.faq-category', compact('category_list'));
    }

    public function addCategory(Request $req)
    {        
        $response = FAQCategoryManager::add($req);
        if($response == true){
            Common::setMessage(__('faq_category_add_success'));
        }else{
            Common::setMessage(__('faq_category_add_failed'), 'error');
        }
        return back();
    }

    public function editCategory(Request $req, $id)
    {
        $category = FAQCategoryManager::getCategoryById($id);
        $category_list = FAQCategoryManager::getCategoryList($req);
        return view('dashboard.faq-category', compact('category_list', 'category'));
    }

    public function editSubmitCategory(Request $req)
    {
        $response = FAQCategoryManager::edit($req);
        if($response == true){
            Common::setMessage(__('faq_category_update_success'));
            return redirect()->route('admin.faq.category');
        }else{
            Common::setMessage(__('faq_category_update_failed'), 'error');
        }
        return back();
    }

    public function deleteCategory($id)
    {
        $response = FAQCategoryManager::delete($id);
        if($response == true){
            Common::setMessage(__('faq_category_delete_success'));
        }else{
            Common::setMessage(__('faq_category_delete_failed'), 'error');
        }
        return back();
    }
}
