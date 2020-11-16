<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Classes\ProductManager;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paginate = 5;
        $productmanager = new ProductManager;
        $product = $productmanager->getProduct();
        //$products = ProductManager::getProducts($paginate);
        dd($paginate);
        return view('frontend.list', ['products' => $products]);
    }
}
