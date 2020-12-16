<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductDescription extends Model
{
    protected $table='product_description';
    protected $fillable = [
        'product_id', 
        'title', 
        'description',
        'status '
    ];

    /**
     * Get the product that owns the description.
     */
    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
}
