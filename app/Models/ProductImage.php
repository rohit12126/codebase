<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $fillable = [
        'product_id', 
        'image'
    ];

    /**
     * Get the product that owns the image.
     */
    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
}
