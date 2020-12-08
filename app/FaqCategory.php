<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FaqCategory extends Model
{
    protected $fillable = [
        'category','status'
    ];
    public function faq()
    {
        return $this->hasOne('App\Faq','id');
    }
}
