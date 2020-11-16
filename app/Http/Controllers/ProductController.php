<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Classes\ProductManager;

class ProductController extends Controller
{

    protected $productManager;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        ProductManager $productManager
    )
    {
        //$this->middleware('auth');
        $this->productManager =  $productManager;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paginate = 5;
        $products = $this->productManager->getProducts($paginate);
        dd($products);
        return view('frontend.list', ['products' => $products]);
    }
}
