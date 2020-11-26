<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    protected $fillable = [
        'name', 
        'category_id', 
        'description', 
        'purchase_price', 
        'sale_price', 
        'stock_qty',
        'status',
        'is_accessory'
    ];

    /**
     * Get the imagess for the product.
     */
    public function images()
    {
        return $this->hasMany('App\Models\ProductImage');
    }

    /**
     * Get the category belongs to the product.
     */
    public function catergory()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
