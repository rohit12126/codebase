<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';

    protected $fillable = [
      'contact',
      'email',
      'address',
      'facebook_url',
      'twitter_url',
      'pinterest_url'
    ];
}
