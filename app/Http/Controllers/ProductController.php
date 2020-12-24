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
use App\Classes\GuestUserManager;

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
    public function index(Request $req, $catSlug ='')
    {   
        $categories = $this->categoryManager->getProductCategoryList();
        
        $products = $this->productManager->getProductsByCategorySlug($catSlug);
        
        return view('frontend.list', [
            'products' => $products,
            'categories'=> $categories,
            'catSlug' =>$catSlug
        ]);
    }

    
    /**
     * Display a Detail of the product.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail(Request $req, $slug) {
        $cart = [];
        $productData = $this->productManager->getProductWithReviewBySlug($slug);
        $categoryId = $productData['product']->category_id;
        $relatedProducts = $this->productManager->getProductsByCategoryId($categoryId);
        if ($productData) {
            $productId = $productData['product']->id;
            $cart = $this->cartManager->getProduct($productId);
            return view('frontend.product-detail',
                [
                    'productData' => $productData,
                    'cart'=>$cart,
                    'relatedProducts' => $relatedProducts,
                ]
            );
        } else {
            return redirect()->route('product.list');
        }

}
    
    /**
     * Store a Review of the product.
     *
     * @return \Illuminate\Http\Response
     */

    public function rating(Request $req){
        $validator = Validator::make($req->all(), [
            'review' => 'required|string',
            'rating' => 'required|integer'
        ]);
         
        if ($validator->fails()) {
             return response()->json(['error'=>$validator->messages()->first()],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        
        //$user = $this->userManager->getCurrentUser();

        $order = OrderManager::getOrderByOrderNUmber($req->orderNum);
        
        if ($order->temp_user == 0) {
            //registered user
            $user = UserManager::getUserById($order->user_id);
        } else {
            //temp user
            $user = GuestUserManager::getUser($order->user_id);
        }
        
        $product = $this->productManager->getProductById($req->productId);
        
        
        $reviewData = DB::table('reviews')
            ->where('reviewrateable_id', $req->productId)
            ->where('author_id', $order->user_id)
            ->first();

        if (!is_null($reviewData)) {
            /* Update rating */
            $rating = $product->updateRating($reviewData->id, [
                'title' => 'Product Review',
                'body' => $req->review,
                'rating' => $req->rating,
                'approved' => true // This is optional and defaults to false
            ]);

            return response()->json(['success' => '1']);
        }

        /* Create rating */
        $rating = $product->rating([
            'title' => 'Product Review',
            'body' => $req->review,
            'rating' => $req->rating,
            'approved' => true
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

    /**
     * Configure page for Product
     *
     * @return \Illuminate\Http\Response
     */
    public function configure(Request $req, $slug) {
        $cart = [];
        $productData = $this->productManager->getProductWithReviewBySlug($slug);
        if ($productData) {
            $productId = $productData['product']->id;
            $cart = $this->cartManager->getProduct($productId);
            
            return view('frontend.configure',
                ['productData' => $productData, 'cart'=>$cart]
            );
        } else {
            return redirect()->route('product.list');
        }
    } 
}
