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
        'stock_qty'
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
        return $this->hasOne('App\Models\Category');
    }
}
