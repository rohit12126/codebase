<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{
    protected $fillable = [
        'rate',
        'state_id',
        'title',
    ];

    public function stateTax()
    {
        return $this->hasMany('App\StateTax')->with('state');
    }
    public function tax()
    {
        return $this->hasMany('App\StateTax');
    }
    
}
