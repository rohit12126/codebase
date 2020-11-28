<?php

namespace App\Classes;

use App\Models\Product as ProductModel;
class ReviewManager
{
    public function getProductReview($productId)
    {
        $product = ProductModel::find($productId);
        $review = $product->getAllRatings($product->id, 'desc');
        return $product;
    }

}