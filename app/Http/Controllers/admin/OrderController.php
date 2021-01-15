<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classes\OrderManager;
use App\Classes\HelperManager as Common;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index(Request $req)
    {
        $order_list = OrderManager::getLatestPaginatedOrderList($req);
        return view('dashboard.order', compact('order_list'));
    }

    public function orderCancel(Request $request)
    {
        $response = OrderManager::ordercancelreason($request);
        if($response)
        {
            $req = new \stdClass();
            $req->order_no = $request->order_id;
            $req->order_status = '5';
            
            if(orderManager::orderStatusChange($req) == true)
            {
                Common::setMessage(__('order_status_change_success'));
            }else{
                Common::setMessage(__('order_status_change_failed'), 'error');
            }
        }

        return back();
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
            Common::setMessage(__('order_status_change_success'));
        }else{
            Common::setMessage(__('order_status_change_failed'), 'error');
        }
        return back();
    }

    public function email()
    {
        return view('dashboard.email.order_confirm');
    }
}
