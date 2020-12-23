<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table='payments';   
    protected $fillable = [
        'payment_id', 
        'order_id', 
        'amount', 
        'currency', 
        'sale_price', 
        'status'
    ];
}
