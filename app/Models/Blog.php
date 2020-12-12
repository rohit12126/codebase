<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    
    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'description',
        'image',
        'status',
    ];
    /**
     * Get the category belongs to the product.
     */
    public function catergory()
    {
        return $this->belongsTo('App\Models\BlogCategory', 'category_id');
    }

}
