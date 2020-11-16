<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='categories';
    protected $fillable = [
        'name',
    ];

    /******* Relationships ********/

    public function image()
    {
        return $this->hasOne('App\Models\CategoryImage', 'category_id');
    }
    
    /**
     * Get the product that belongs the category.
     */
    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
}
