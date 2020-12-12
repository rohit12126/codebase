<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Classes\ProductManager;
use App\Classes\CartManager;
use App\Classes\UserManager;
use App\Classes\OrderManager;
use App\Classes\CategoryManager;

class ProductController extends Controller
{
    protected $productManager;
    protected $cartManager;
    protected $userManager;
    protected $orderManager;
    protected $categoryManager;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        ProductManager $productManager,
        CartManager $cartManager,
        UserManager $userManager,
        OrderManager $orderManager,
        CategoryManager $categoryManager
    )
    {
        $this->productManager = $productManager;
        $this->cartManager = $cartManager;
        $this->userManager = $userManager;
        $this->orderManager = $orderManager;
        $this->categoryManager = $categoryManager;
    }
    /**
     * Display a listing of the product.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {   
        $productArr = [];
        $categories = $this->categoryManager->getCategoryList($req);
        foreach ($categories as $key => $category) {
            $productData = $this->productManager->getProductsByCategoryId($category->id);
            if($productData->isNotEmpty()) {
                $useForElementId = substr(md5($category->id), 0, 6);
                $categories[$key]->elementId = $useForElementId;
                $productArr[$useForElementId] = $productData;
            }
        }
        return view('frontend.list', ['productArr' => $productArr, 'categories'=> $categories]);
    }

    
    /**
     * Display a Detail of the product.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail(Request $req) {
        $productId = $req->input('id');
        $cart = [];
        $productData = $this->productManager->getProductWithReview($productId);
        
        $cart = $this->cartManager->getProduct($productId);
        return view('frontend.product-detail',
            ['productData' => $productData, 'cart'=>$cart]
        );
    }
    
    /**
     * Store a Review of the product.
     *
     * @return \Illuminate\Http\Response
     */

    public function rating(Request $req){
        $validator = Validator::make($req->all(), [
            'review' => 'required|string',
            'rating' => 'required|integer',
        ]);
         
        if ($validator->fails()) {
             return response()->json(['error'=>$validator->messages()->first()],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        
        $user = $this->userManager->getCurrentUser();
        $product = $this->productManager->getProductById($req->productId);
        $rating = $product->rating([
            'title' => 'Product Review',
            'body' => $req->review,
            'rating' => $req->rating,
        ], $user);
        return response()->json(['success' => '1']);
    }

    /**
     * Accessory List
     *
     * @return \Illuminate\Http\Response
     */
    public function accessory() {
        $productArr = [];
        $categories = $this->categoryManager->getCategoryList();
        foreach ($categories as $key => $category) {
            $productData = $this->productManager->getProductsByCategoryId($category->id);
            if($productData->isNotEmpty()) {
                $useForElementId = substr(md5($category->id), 0, 6);
                $categories[$key]->elementId = $useForElementId;
                $productArr[$useForElementId] = $productData;
            }
        }
        return view('frontend.accessory-list', ['productArr' => $productArr, 'categories'=> $categories]);
    }

}
