<?php

namespace App\Classes;

use App\Models\Product as ProductModel;
use Illuminate\Support\Facades\DB;
use App\Classes\ProductManager;
use App\Classes\UserManager;

class ReviewManager
{

    public function getAllActiveReviews()
    {
        $review = DB::table('reviews')->where('approved', 1)->paginate(10);
        return $review;
    }

    public function getAllInActiveReviews()
    {
        $review = DB::table('reviews')->where('approved', 0)->paginate(10);
        return $review;
    }

    public function deleteReview($id)
    {
        return DB::table('reviews')->delete($id);
    }
    public function aproovReview($id)
    {
        return DB::table('reviews')->where('id',$id)->update(['approved' => true]);;
    }
    public function disapprovReview($id)
    {
        return DB::table('reviews')->where('id',$id)->update(['approved' => false]);;
    }
    

}