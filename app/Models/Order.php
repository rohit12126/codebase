<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'order_no',
        'billing_address',
        'shipping_address',
        'status'
    ];

    /******* Relationships ********/
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function productList()
    {
        return $this->hasMany('App\Models\OrderProduct', 'order_no', 'order_no');
    }

    public function getShippingAddress()
    {
        return $this->belongsTo('App\Models\Address', 'shipping_address', 'id');
    }

    public function getBillingAddress()
    {
        return $this->belongsTo('App\Models\Address', 'billing_address', 'id');
    }
    /******* Relationships ********/
}
