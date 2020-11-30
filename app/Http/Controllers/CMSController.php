<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Classes\CMSManager;

class ProduCMSControllerctController extends Controller
{
    protected $cmsManager;
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        CMSManager $cmsManager
        
    )
    {
        $this->cmsManager = $cmsManager;
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
        $product = $this->productManager->getProductWithReview($productId);
        $cart = $this->cartManager->getProduct($productId);
        return view('frontend.product-detail',
            ['product' => $product, 'cart'=>$cart]
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


}
