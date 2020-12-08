<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $fillable = [
        'title', 'body', 'status','category'
    ];
    public function categori()
    {
        return $this->belongsTo('App\FaqCategory','category');
    }
}
