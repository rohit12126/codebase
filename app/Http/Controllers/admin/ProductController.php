<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classes\ProductManager;
use App\Classes\CategoryManager;
use App\Classes\HelperManager as Common;

class ProductController extends Controller
{
        /**
     * Load ADD Product Form.
     *  @param $req
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        $category_list = CategoryManager::getActiveCategoryList($req);
        return view('dashboard.product', compact('category_list'));
    }

        /**
     * Display list of Products
     *  @param $req
     * @return \Illuminate\Http\Response
     */
    public function productList(Request $req)
    {
        $product_list = ProductManager::getProductListPaginated($req);
        return view('dashboard.product_list', compact('product_list'));
    }

    /**
     * Stores a new product
     *  @param $req
     * @return \Illuminate\Http\Response
     */
    public function addProduct(Request $req)
    {
        $this->validate(
            $req, 
            [
                'image' => 'required|array|max:5',
                'image.*' => 'mimes:jpeg,jpg,png|max:4000',
                'description' => 'required',
                'sale_price'=> 'required|numeric|min:0|not_in:0',
                'sku'=> 'required|max:20|min:2|unique:products,sku'
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

    /**
     * Display Edit Product form
     *  @param $req
     * @return \Illuminate\Http\Response
     */
    public function editProduct(Request $req, $id)
    {
        $product = ProductManager::getProductById($id);
        $product_list = ProductManager::getProductList();
        $category_list = CategoryManager::getCategoryList($req);
        return view('dashboard.product', compact('product_list', 'category_list', 'product'));
    }

    /**
     * Update a Product
     *  @param $req
     * @return \Illuminate\Http\Response
     */
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
                'description' => 'required',
                'sku'=> 'required|max:20|min:2|unique:products,sku,'.$req->id
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

    /**
     * Destroy a Product
     *  @param $id
     * @return \Illuminate\Http\Response
     */
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
