<?php

namespace App\Classes;

use App\Models\Product as ProductModel;
use Illuminate\Support\Facades\DB;
use App\Classes\ProductManager;
use App\Classes\UserManager;

class ReviewManager
{

    public function getAllActiveReviews($req)
    {
        $review = DB::table('reviews')
            ->join('products', 'products.id', '=', 'reviews.reviewrateable_id')
            ->join('users', 'users.id', '=', 'reviews.author_id')
            ->select(
                'reviews.id',
                'reviews.rating',
                'reviews.title',
                'reviews.body',
                'reviews.approved',
                'products.name as product_name',
                'users.name as user_name',
        );

        if($req->product_name){
            $review->where('products.name', 'like', '%' . $req->product_name . '%');
        }

        if ($req->user_name) {
            $review->where('users.name', 'like', '%' . $req->user_name . '%');
        }

        if ($req->review) {
            $review->where('reviews.body', 'like', '%' . $req->review . '%');
        }
        
        $review = $review->where('reviews.approved', 1)
            ->orderBy('id', 'desc')
            ->paginate(10);
        return $review;
    }

    public function getAllInActiveReviews($req)
    {
        $review = DB::table('reviews')
            ->join('products', 'products.id', '=', 'reviews.reviewrateable_id')
            ->join('users', 'users.id', '=', 'reviews.author_id')
            ->select(
                'reviews.id',
                'reviews.rating',
                'reviews.title',
                'reviews.body',
                'reviews.approved',
                'products.id as product_id',
                'products.name as product_name',
                'users.id as user_id',
                'users.name as user_name',
            );

            if($req->product_name){
                $review->where('products.name', 'like', '%' . $req->product_name . '%');
            }
    
            if ($req->user_name) {
                $review->where('users.name', 'like', '%' . $req->user_name . '%');
            }
    
            if ($req->review) {
                $review->where('reviews.body', 'like', '%' . $req->review . '%');
            }
            
        $review = $review->where('reviews.approved', 0)
            ->orderBy('id', 'desc')
            ->paginate(10);
        return $review;
    }

    public function deleteReview($id)
    {
        return DB::table('reviews')->delete($id);
    }

    public function aproovReview($id)
    {
        return DB::table('reviews')->where('id',$id)->update(['approved' => true]);
    }

    public function disapprovReview($id)
    {
        return DB::table('reviews')->where('id',$id)->update(['approved' => false]);
    }
    
    public static function getAllActiveReviewsByProductId($productId)
    {
        $review = DB::table('reviews')
            ->join('products', 'products.id', '=', 'reviews.reviewrateable_id')
            ->join('users', 'users.id', '=', 'reviews.author_id')
            ->select(
                'reviews.id',
                'reviews.rating',
                'reviews.title',
                'reviews.body',
                'reviews.approved',
                'reviews.created_at',
                'products.name as product_name',
                'users.name as user_name',
            )
            ->where('reviews.reviewrateable_id', $productId)
            ->where('reviews.approved', 1)
            ->orderBy('id', 'desc')
            ->paginate(5);
        return $review;
    }

    public static function getReviewsByUserAndProduct($product_id, $user_id)
    {
        $review = DB::table('reviews')
            ->where('reviewrateable_id', $product_id)
            ->where('author_id', $user_id)
            ->first();
    }
}
