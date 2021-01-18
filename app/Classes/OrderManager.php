<?php

namespace App\Classes;

use App\Models\Order as OrderModel;
use App\Models\OrderProduct;
use App\Models\OrderCancelReason;
use App\Classes\HelperManager as Common;
use App\Models\Product as ProductModel;
// use App\Models\ProductImage as ProductImageModel;
use Carbon\Carbon;
use App\Mail\OrderStatusChange;
use Illuminate\Support\Facades\Mail;

class OrderManager
{
    public static function orderStatusChange($req)
    {
    
        $order = self::getOrderByOrderNUmberWithOrderAddress($req->order_no);
        
        if ($order->fill(['status' => $req->order_status])->save()) {
            
            $data['order_no'] = $order->order_no;
            $data['buyer_name'] = ucwords($order->user->name);
            $data['status'] = $order->order_status;
            $data['order_status_num'] = $req->order_status;
            
            $email = $order->getBillingAddress->email;
            $data['ship'] =  $order->getShippingAddress;
            $data['bill'] =  $order->getBillingAddress;
            if($req->order_status == 5)
            {
                $reason = self::getCancelReason($order->order_no);
                $data['reason'] = $reason->reason;
                $data['cancelled_by'] = $reason->cancelled_by;
            }
            Mail::to($email)->send(new OrderStatusChange($data));
            return true;
        } else {
            return false;
        }
    }

    public static function userOrderCancelRequest($id)
    {
        self::getOrderByOrderNUmber($id);
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
                    WHEN 1 THEN "Received"
                    WHEN 2 THEN "Confirmed"
                    WHEN 3 THEN "Shipped"
                    WHEN 4 THEN "Delivered"
                    WHEN 5 THEN "Cancelled"
                    ELSE "" END) AS order_status')
                )
                ->with('user', 'getShippingAddress', 'getBillingAddress')
                ->latest();
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
                        $listProduct = function ($query) use ($product) {
                            // $query->where('user_id', Auth::user()->id);
                            $query->whereIn('product_id', array_column($product, 'id'));
                        };
                        $query->whereHas('productList', $listProduct);
                    }
                });
            }
            return $order->paginate(10);
        } else {
            return OrderModel::select(
                '*',
                \DB::raw('(
                    CASE status 
                    WHEN 1 THEN "Received"
                    WHEN 2 THEN "Confirmed"
                    WHEN 3 THEN "Shipped"
                    WHEN 4 THEN "Delivered"
                    WHEN 5 THEN "Cancelled"
                    ELSE "" END) AS order_status')
            )->with('user', 'getShippingAddress', 'getBillingAddress')->latest()->paginate(10);
        }
    }

    public function getOrderStatusByOrderNumber($order)
    {
        $order = self::getOrderByOrderNUmber($order);
        if ($order) {
            switch ($order->status) {
                case 1:
                    $status = 'Received';
                    break;

                case 2:
                    $status = 'Confirmed';
                    break;

                case 3:
                    $status = 'Shipped';
                    break;

                case 4:
                    $status = 'Delivered';
                    break;
                case 5:
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
            WHEN 1 THEN "Received"
            WHEN 2 THEN "Confirmed"
            WHEN 3 THEN "Shipped"
            WHEN 4 THEN "Delivered"
            WHEN 5 THEN "Cancelled"
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
            WHEN 1 THEN "Updated"
            WHEN 2 THEN "Received"
            WHEN 3 THEN "Shipped"
            WHEN 4 THEN "Delivered"
            WHEN 5 THEN "Cancelled"
            ELSE "" END) AS order_status')
        )
            ->with('user')
            ->with('getShippingAddress')
            ->with('getBillingAddress')
            ->with('getPaymentDetail')
            ->with('productList.product.images')
            ->where('order_no', $order)
            ->first();
    }

    public static function getOrderByUserId($userId)
    {
        return OrderModel::with('productList')
        ->where("user_id", $userId)
        ->orderBy('id', 'DESC')
        ->get();
    }

    public static function generateOrderNumber(){
            $orderNumber = OrderModel::select(
                'order_no'
            ) ->orderBy('order_no', 'DESC')->first();
            if (isset($orderNumber->order_no)){
            $orderNumber = $orderNumber->order_no + 1;
            }
            if ($orderNumber == 0){
                $orderNumber = time();
            }
            return $orderNumber;
    }

    public static function addOrder($orderData) {
        
        return  OrderModel::create($orderData);
    }
    
    public static function addOrderProduct($orderProductData) {
        return  OrderProduct::create($orderProductData);
    }

    public static function getProductsByOrderNUmber($order)
    {
        return OrderModel::select('*')
            ->with('getShippingAddress')
            ->with('getBillingAddress')
            ->with('productList.product.images')
            ->where('order_no', $order)->first();
    }

    public static function getOrderCount($is_cancelled=false)
    {
        if($is_cancelled === true){
            return OrderModel::where('status', 3)->get()->count();
        }else{
            return OrderModel::get()->count();
        }
    }
    public static function getProductsByOrder($order)
    {
        return OrderProduct::where('order_no', $order)->with('product')->get();
    }
    public static function getLastOrder($userId,$temp)
    {
        return OrderModel::where("user_id", $userId)
            ->where('temp_user', $temp)
            ->latest()
            ->first();
    }

    public static function ordercancelreason($req)
    {
        $data = [
            'order_id' => $req->order_id,
            'reason' => $req->message,
            'cancelled_by' => ($req->cancelled_by == 1) ? 1 : '2'
        ];

        if(OrderCancelReason::create($data)){
            return true;
        }
        return false;
    }

    public static function getCancelReason($orderId)
    {
        return OrderCancelReason::where('order_id', $orderId)->first();
    }

}
