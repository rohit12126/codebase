<?php

namespace App\Classes;

use App\Models\Order as OrderModel;
use App\Models\OrderProduct as OrderProductModel;
use App\Classes\HelperManager as Common;

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

    public static function getLast50OrderList()
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
            ->with('user')->latest()->limit(50)->get();
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
