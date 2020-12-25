<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $fillable = [
        'name', 'email', 'phone_nu', 'reason', 'message', 'connected'
    ];
}
