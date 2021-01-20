<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    protected $fillable = [
        'order_no', 
        'product_id', 
        'product_quantity', 
        'price',
        'configure_detail'
    ];

    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'product_id');
    }
}
