<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table='states';

    protected $fillable = [
        'zone_id'
    ];

    public function zone()
    {
        return $this->belongsTo('App\Models\Zone');
    }
}


