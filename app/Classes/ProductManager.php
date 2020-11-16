<?php

namespace App\Classes;

use App\Models\Product as ProductModel;
use App\Models\ProductImage;
use App\Classes\HelperManager as Common;

class ProductManager
{
    public function getProducts($paginate)
    {
        $products = ProductModel::with('images', 'catergory')->paginate($paginate);
        return $products;
    }

    public function getProduct($productId)
    {
        $products = ProductModel::with('images', 'catergory')->find($productId);
        return $products;
    }
}
