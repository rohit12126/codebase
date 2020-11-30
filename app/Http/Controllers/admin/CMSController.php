<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classes\CMSManager;
use App\Classes\HelperManager as Common;

class CMSController extends Controller
{
    public function index()
    {
        return view('dashboard.page');
    }

    public function pageList(Request $req)
    {
        $page_list = CMSManager::getPageListPaginated($req);
        return view('dashboard.page_list', compact('page_list'));
    }

    public function addPage(Request $req)
    {
        $response = CMSManager::add($req);
        if($response == true){
            Common::setMessage(__('page_add_success'));
        }else{
            Common::setMessage(__('page_add_failed'), 'error');
        }
        return redirect()->route('admin.page.list');
    }

    public function editPage($id)
    {
        $product = CMSManager::getProductById($id);
        $product_list = CMSManager::getProductList();
        return view('dashboard.page', compact('page_list', 'page'));
    }

    public function editSubmitPage(Request $req)
    {
        $response = CMSManager::edit($req);
        if($response == true){
            Common::setMessage(__('page_update_success'));
            return back();
        }else{
            Common::setMessage(__('page_update_falied'), 'error');
        }
        return redirect()->route('admin.page.list');
    }

    public function deletePage($id)
    {
        $response = CMSManager::delete($id);
        if($response == true){
            Common::setMessage(__('page_delete_success'));
        }else{
            Common::setMessage(__('page_delete_failed'), 'error');
        }
        return back();
    }
}
