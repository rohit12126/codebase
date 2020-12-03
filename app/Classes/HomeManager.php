<?php

namespace App\Classes;

use App\Models\Blog;
use App\Models\Order;
use App\Models\Product;
use App\Models\Users;
use Carbon\Carbon;

use App\Classes\HelperManager as Common;

class HomeManager
{
    public static function getDashboardData()
    {
        $date = \Carbon\Carbon::today()->subDays(7);
        
        $data = [];
        
        /* Recent Counts */
        $data['recentBlogCount'] = Blog::where('created_at', '>=', $date)->count();
        $data['recentOrderCount'] = Order::where('created_at', '>=', $date)->count();
        $data['recentProductsCount'] = Product::where('is_accessory', '=', 0)
            ->where('created_at', '>=', $date)
            ->count();

        $data['recentAccessoryCount'] = Product::where('is_accessory', '=', 1)
            ->where('created_at', '>=', $date)
            ->count();

        $data['recentUserCount'] = Users::where('menuroles', '=', 'user')
            ->where('created_at', '>=', $date)
            ->count();

        /* Active Counts */
        $data['blogCount'] = Blog::where('status', '=', 1)->count();
        $data['orderCount'] = Order::count();
        $data['cancleOrderCount'] = Order::where('status', '=', 3)->count();
        $data['productsCount'] = Product::where('is_accessory', '=', 0)->count();
        $data['accessoryCount'] = Product::where('is_accessory', '=', 1)->count();
        $data['userCount'] = Users::where('menuroles', '=', 'user')->count();

        return $data;
    }
}
