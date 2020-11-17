<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classes\ProductManager;
use App\Classes\CategoryManager;
use App\Classes\HelperManager;

class ProductController extends Controller
{
    public function index()
    {
        $product_list = ProductManager::getProductList();
        $category_list = CategoryManager::getCategoryList();
        return view('dashboard.product', compact('product_list', 'category_list'));
    }

    public function addProduct(Request $req)
    {
        $response = ProductManager::add($req);
        if($response == true){
            HelperManager::setMessage('Product Add Successfully!');
        }else{
            HelperManager::setMessage('Product Add Failed!', 'error');
        }
        return back();
    }

    public function editProduct($id)
    {
        $product = ProductManager::getProductById($id);
        $product_list = ProductManager::getProductList();
        $category_list = CategoryManager::getCategoryList();
        return view('dashboard.product', compact('product_list', 'category_list', 'product'));
    }

    public function editSubmitProduct(Request $req)
    {
        // \App\Models\ProductImage::whereNotIn("id", array_keys($req->storeimage))->where('product_id', $req->id)->delete();
        // dump( array_keys($req->storeimage) );
        // dd($req);
        $response = ProductManager::edit($req);
        if($response == true){
            HelperManager::setMessage('Product Updated Successfully!');
            return back();
        }else{
            HelperManager::setMessage('Product Update Failed!', 'error');
        }
        return back();
    }

    public function deleteProduct($id)
    {
        $response = ProductManager::delete($id);
        if($response == true){
            HelperManager::setMessage('Product deleted Successfully!');
        }else{
            HelperManager::setMessage('Product deletion Failed!', 'error');
        }
        return back();
    }
}
