<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='categories';
    protected $fillable = [
        'name',
        'status'
    ];

    /******* Relationships ********/
    public function image()
    {
        return $this->hasOne('App\Models\CategoryImage', 'category_id');
    }
    
    /**
     * Get the product that owns the category.
     */
    public function product()
    {
        return $this->hasOne('App\Models\Product', 'category_id', 'id'); 
    }
}
