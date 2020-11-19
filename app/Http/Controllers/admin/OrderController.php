<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classes\OrderManager;
use App\Classes\HelperManager;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index(Request $req)
    {
        $order_list = OrderManager::getLatestPaginatedOrderList($req);
        return view('dashboard.order', compact('order_list'));
    }

    public function orderDetails($order)
    {
        $order = OrderManager::getOrderByOrderNUmberWithOrderAddress($order);
        return view('dashboard.order_details', compact('order'));
    }

    public function orderStatusChange(Request $req)
    {
        $response = OrderManager::orderStatusChange($req);
        if($response == true){
            HelperManager::setMessage('Order Status Changed Successfully!');
        }else{
            HelperManager::setMessage('Order status could not be change!', 'error');
        }
        return back();
    }

    public function email()
    {
        return view('dashboard.email.order_confirm');
    }
}
