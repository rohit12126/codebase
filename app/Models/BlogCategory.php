<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $table = 'blog_category';
    protected $fillable = [
        'name',
        'status'
    ];

    /**
     * Get the blog that belongs the category.
     */
    public function blog()
    {
        return $this->hasOne('App\Models\Blog');
    }
}
