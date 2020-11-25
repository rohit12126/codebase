<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    
    /**
     * Get the category belongs to the product.
     */
    public function catergory()
    {
        return $this->belongsTo('App\Models\BlogCategory');
    }
}
