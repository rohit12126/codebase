<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'address';
    protected $fillable = [
        'user_id',
        'address',
        'type',
        'name',
        'mobile',
        'country',
        'state',
        'city',
        'zipcode',
        'temp_user',
    ];
}
