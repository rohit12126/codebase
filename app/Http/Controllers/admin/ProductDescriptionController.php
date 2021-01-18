<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classes\ProductDescriptionManager;
use App\Classes\ProductManager;
use App\Classes\HelperManager as Common;

class ProductDescriptionController extends Controller
{
        /**
     * Creatre new  Product Description Form.
     *  @param $req
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        $productDescriptionList = ProductDescriptionManager::getProductDescriptionList($req);
        $productId = $req->product_id;
        $product = ProductManager::getProductById($productId);
        
        return view('dashboard.product-description', compact('productDescriptionList', 'productId', 'product'));
    }

        /**
     * Stores a new  Product Description
     *  @param $req
     * @return \Illuminate\Http\Response
     */
    public function addProductDescription(Request $req)
    {        
        $response = ProductDescriptionManager::add($req);
        if ($response == true) {
            Common::setMessage(__('product_description_add_success'));
        } else {
            Common::setMessage(__('product_description_add_failed'), 'error');
        }

        return redirect()->route('admin.product.description', ['product_id' => $req->product_id]);
    }

    /**
     *  Edit Product Description Form
     *  @param $req
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function editProductDescription(Request $req, $id)
    {
        $productDescription = ProductDescriptionManager::getProductDescriptionById($id);
        $productDescriptionList = ProductDescriptionManager::getProductDescriptionList($req);
        $productId = $req->product_id;
        $product = ProductManager::getProductById($productId);
        return view('dashboard.product-description', compact(
            'productDescription',
            'productDescriptionList',
            'productId',
            'product'
        ));
    }

    /**
     *Updates a  Product Description
     *  @param $req
     * @return \Illuminate\Http\Response
     */
    public function editSubmitProductDescription(Request $req)
    {
        $response = ProductDescriptionManager::edit($req);
        if ($response == true) {
            Common::setMessage(__('product_description_update_success'));
            return redirect()->route('admin.product.description', ['product_id' => $req->product_id]);
        } else {
            Common::setMessage(__('product_description_update_failed'), 'error');
        }

        return redirect()->route('admin.product.description', ['product_id' => $req->product_id]);
    }

        /**
     * Destroy Product Description
     *  @param $req
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function deleteProductDescription(Request $req, $id)
    {
        $response = ProductDescriptionManager::delete($id);
        if ($response == true) {
            Common::setMessage(__('product_description_delete_success'));
        } else {
            Common::setMessage(__('product_description_delete_failed'), 'error');
        }
        return redirect()->route('admin.product.description', ['product_id' => $req->product_id]);
    }
}
