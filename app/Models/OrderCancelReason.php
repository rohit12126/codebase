<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderCancelReason extends Model
{

  protected $table = 'cancelled_order_reason';

    protected $fillable = [
      'order_id',
      'reason',
      'cancelled_by'
    ];
  
}
