<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classes\ProductManager;
use App\Classes\CategoryManager;
use App\Classes\HelperManager as Common;

class ProductController extends Controller
{
    public function index(Request $req)
    {
        $category_list = CategoryManager::getCategoryList($req);
        return view('dashboard.product', compact('category_list'));
    }

    public function productList(Request $req)
    {
        $product_list = ProductManager::getProductListPaginated($req);
        return view('dashboard.product_list', compact('product_list'));
    }

    public function addProduct(Request $req)
    {
        $this->validate(
            $req, 
            [
                'image' => 'required|array|max:5',
                'image.*' => 'mimes:jpeg,jpg,png|max:4000',
                'description' => 'required'
            ]
        );
        $response = ProductManager::add($req);
        if($response == true){
            Common::setMessage(__('item_add_success'));
        }else{
            Common::setMessage(__('item_add_failed'), 'error');
        }
        return redirect()->route('admin.item.list');
    }

    public function editProduct(Request $req, $id)
    {
        $product = ProductManager::getProductById($id);
        $product_list = ProductManager::getProductList();
        $category_list = CategoryManager::getCategoryList($req);
        return view('dashboard.product', compact('product_list', 'category_list', 'product'));
    }

    public function editSubmitProduct(Request $req)
    {
        $imgRequired ='';
        if(is_null($req->storeimage)) {
            $imgRequired = 'required|';
        }
        $this->validate(
            $req, 
            [
                'image' => $imgRequired.'array|max:5',
                'image.*' => 'mimes:jpeg,jpg,png|max:4000',
                'description' => 'required'
            ]
        );
        $response = ProductManager::edit($req);
        if($response == true){
            Common::setMessage(__('item_update_success'));
            return back();
        }else{
            Common::setMessage(__('item_update_falied'), 'error');
        }
        return redirect()->route('admin.item.list');
    }

    public function deleteProduct($id)
    {
        $response = ProductManager::delete($id);
        if($response == true){
            Common::setMessage(__('item_delete_success'));
        }else{
            Common::setMessage(__('item_delete_failed'), 'error');
        }
        return back();
    }
}
