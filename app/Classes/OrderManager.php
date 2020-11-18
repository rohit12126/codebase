<?php

namespace App\Classes;

use App\Models\Order as OrderModel;
use App\Models\OrderProduct as OrderProductModel;
use App\Classes\HelperManager as Common;
use App\Models\Product as ProductModel;
use Carbon\Carbon;

class OrderManager
{
    public static function orderStatusChange($req)
    {
        $order = self::getOrderByOrderNUmber($req->order_no);
        if ($order->fill(['status' => $req->order_status])->save()) {
            return true;
        } else {
            return false;
        }
    }

    public static function getLatestPaginatedOrderList($req)
    {
        if (
            $req->from_date !== null
            || $req->order_no !== null
            || $req->to_date !== null
            || $req->product_name !== null
            || $req->order_status !== null
        ) {
            $order = OrderModel::select(
                '*',
                \DB::raw('(
                    CASE status 
                    WHEN 1 THEN "In Progress"
                    WHEN 2 THEN "Delivered"
                    WHEN 3 THEN "Cancelled"
                    ELSE "" END) AS order_status')
            )->with('user')->latest();
            if ($req->order_status) {
                $order->where('status', $req->order_status);
            }
            if ($req->order_no) {
                $order->where('order_no', $req->order_no);
            }
            if ($req->from_date) {
                $order->where(\DB::raw('CAST(created_at AS DATE)'), '>=', Carbon::parse($req->from_date)->format('Y-m-d'));
            }
            if ($req->to_date) {
                $order->where(\DB::raw('CAST(created_at AS DATE)'), '<=', Carbon::parse($req->to_date)->format('Y-m-d'));
            }
            if ($req->product_name) {
                $order->with('productList');
                $order->where(function ($query) use ($req) {
                    $product = ProductModel::select('id')->where('name', 'like', '%' . $req->product_name . '%')->get()->toArray();
                    if (count($product) > 0) {
                        $listProduct = function ($query) use($product) {
                            // $query->where('user_id', Auth::user()->id);
                            $query->whereIn('product_id', array_column($product, 'id'));
                         };
                        $query->whereHas('productList', $listProduct);
                    }
                });
            }
            return $order->get();
        } else {
            return OrderModel::select(
                '*',
                \DB::raw('(
                    CASE status 
                    WHEN 1 THEN "In Progress"
                    WHEN 2 THEN "Delivered"
                    WHEN 3 THEN "Cancelled"
                    ELSE "" END) AS order_status')
            )->with('user')->latest()->paginate(10);
        }
    }

    public function getOrderStatusByOrderNumber($order)
    {
        $order = self::getOrderByOrderNUmber($order);
        if ($order) {
            switch ($order->status) {
                case 1:
                    $status = 'In Process';
                    break;

                case 2:
                    $status = 'Delivered';
                    break;

                case 3:
                    $status = 'Cancelled';
                    break;
            }
            return $status;
        } else {
            return false;
        }
    }

    public static function getOrderById($id)
    {
        return OrderModel::find($id);
    }

    public static function getOrderByOrderNUmber($order)
    {
        return OrderModel::select(
            '*',
            \DB::raw('(
            CASE status 
            WHEN 1 THEN "In Progress"
            WHEN 2 THEN "Delivered"
            WHEN 3 THEN "Cancelled"
            ELSE "" END) AS order_status')
        )
            ->with('user')
            ->where('order_no', $order)->first();
    }

    public static function getOrderByOrderNUmberWithOrderAddress($order)
    {
        return OrderModel::select(
            '*',
            \DB::raw('(
            CASE status 
            WHEN 1 THEN "In Progress"
            WHEN 2 THEN "Delivered"
            WHEN 3 THEN "Cancelled"
            ELSE "" END) AS order_status')
        )
            ->with('user')
            ->with('getShippingAddress')
            ->with('getBillingAddress')
            ->with('productList.product')
            ->where('order_no', $order)->first();
    }
}
