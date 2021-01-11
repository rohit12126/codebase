<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    protected $table='zones';

    

    protected $fillable = [
        'title',
        'product_price',
        'hardware_price'
    ];

    public function state()
    {
        return $this->hasMany('App\Models\State');
    }
}
