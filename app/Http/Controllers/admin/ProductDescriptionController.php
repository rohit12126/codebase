<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classes\ProductDescriptionManager;
use App\Classes\HelperManager as Common;

class ProductDescriptionController extends Controller
{
    public function index(Request $req)
    {
        $productDescriptionList = ProductDescriptionManager::getProductDescriptionList($req);
        return view('dashboard.product-description', compact('productDescriptionList'));
    }

    public function addProductDescription(Request $req)
    {        
        $response = ProductDescriptionManager::add($req);
        if($response == true){
            Common::setMessage(__('product_description_add_success'));
        }else{
            Common::setMessage(__('product_description_add_failed'), 'error');
        }
        return back();
    }

    public function editProductDescription(Request $req, $id)
    {
        $productDescription = ProductDescriptionManager::getProductDescriptionById($id);
        $productDescriptionList = ProductDescriptionManager::getProductDescriptionList($req);
        return view('dashboard.product-description', compact('productDescription', 'productDescriptionList'));
    }

    public function editSubmitProductDescription(Request $req)
    {
        $response = ProductDescriptionManager::edit($req);
        if($response == true){
            Common::setMessage(__('product_description_update_success'));
            return redirect()->route('admin.product.description');
        }else{
            Common::setMessage(__('product_description_update_failed'), 'error');
        }
        return back();
    }

    public function deleteProductDescription($id)
    {
        $response = ProductDescriptionManager::delete($id);
        if($response == true){
            Common::setMessage(__('product_description_delete_success'));
        }else{
            Common::setMessage(__('product_description_delete_failed'), 'error');
        }
        return back();
    }
}
