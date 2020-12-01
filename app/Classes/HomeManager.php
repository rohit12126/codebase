<?php

namespace App\Classes;

use App\Models\Blog;
use App\Models\Order;
use App\Models\Product;
use App\Models\Users;

use App\Classes\HelperManager as Common;

class HomeManager
{
    public static function getDashboardData()
    {
        $data = [];
        $data['blogCount'] = Blog::where('status', '=', 1)->count();
        $data['orderCount'] = Order::count();
        $data['cancleOrderCount'] = Order::where('status', '=', 3)->count();
        $data['productsCount'] = Product::where('is_accessory', '=', 0)->count();
        $data['accessoryCount'] = Product::where('is_accessory', '=', 1)->count();
        $data['userCount'] = Users::where('menuroles', '=', 'user')->count();
        return $data;
    }
}
