<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Classes\ProductManager;
use App\Classes\CartManager;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    protected $productManager;
    protected $cartManager;
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
     * Cart List
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req) {
        $productList = $this->cartManager->getCartContain();
        $cartSubTotal = $this->cartManager->subTotal();
        
        if (Auth::check()) {
            $userId = Auth::user()->id;
        } else {
            $userId = '';
        }
        
        return view('frontend.cart',
            [
                'products' => $productList,
                'cartSubTotal' => $cartSubTotal,
                'userId' => $userId
            ]
        );
    }

    /**
     * Add to cart a product (Increase qty)
     *
     * @return \Illuminate\Http\Response
     */
    public function addToCart(Request $req) {
        $productId = $req->input('productId');
        $product = $this->productManager->getProduct($productId);
        $this->cartManager->addToCart($product);
    }
    
    /**
     * Remove from cart a product  (Decrease qty)
     *
     * @return \Illuminate\Http\Response
     */
    public function removeFromCart(Request $req) {
        $productId = $req->input('productId');
        $product = $this->productManager->getProduct($productId);
        $this->cartManager->removeFromCart($product);
    }

    /**
     * Update cart product
     *
     * @return \Illuminate\Http\Response
     */
    public function updateCart(Request $req) {
        $productId = $req->input('productId');
        $qty = $req->input('qty');
        $product = $this->productManager->getProduct($productId);
        $this->cartManager->updateCart($product, $qty);
    }

    /**
     * Remove product
     *
     * @return \Illuminate\Http\Response
     */
    public function removeProduct(Request $req) {
        $rowId = $req->input('rowId');
        $this->cartManager->removeProduct($rowId);
    }
}
