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
        $category_list = CategoryManager::getCategoryList();
        return view('dashboard.product', compact('category_list'));
    }

    public function productList(Request $req)
    {
        $product_list = ProductManager::getProductListPaginated($req);
        return view('dashboard.product_list', compact('product_list'));
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
        $response = ProductManager::edit($req);
        if($response == true){
            HelperManager::setMessage('Product Updated Successfully!');
            return back();
        }else{
            HelperManager::setMessage('Product Update Failed!', 'error');
        }
        return redirect()->route('admin.product.list');
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
