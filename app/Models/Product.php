<?php

namespace App\Models;

use Codebyray\ReviewRateable\Contracts\ReviewRateable;
use Codebyray\ReviewRateable\Traits\ReviewRateable as ReviewRateableTrait;
use Illuminate\Database\Eloquent\Model;

class Product extends Model implements ReviewRateable
{
    use ReviewRateableTrait;

    protected $fillable = [
        'name', 
        'category_id', 
        'description', 
        'purchase_price', 
        'sale_price', 
        'stock_qty',
        'status',
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
