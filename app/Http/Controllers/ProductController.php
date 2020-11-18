<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Classes\ProductManager;
use App\Classes\CartManager;

class ProductController extends Controller
{
    protected $productManager;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        ProductManager $productManager,
        CartManager $cartManager
    )
    {
        $this->productManager = $productManager;
        $this->cartManager = $cartManager;
    }
    /**
     * Display a listing of the product.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paginate = 5;
        
        $products = $this->productManager->getProducts($paginate);
        return view('frontend.list', ['products' => $products]);
    }

    
    /**
     * Display a Detail of the product.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail(Request $req) {
        $productId = $req->input('id');
        $cart = [];
        $product = $this->productManager->getProduct($productId);
        $cart = $this->cartManager->getProduct($productId);
        return view('frontend.product-detail',
            ['product' => $product, 'cart'=>$cart]
        );
    }
}
