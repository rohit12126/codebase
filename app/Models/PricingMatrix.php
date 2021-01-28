<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class PricingMatrix extends Model
{
  use SoftDeletes;

    protected $table='pricing_matrix';

    protected $fillable = [
      'product_family',
      'description',
      'model',
      'upc',
      'type',
      'colorFinish',
      'mirror',
      'cost',
      'retail',
      'B_or_S',
      'style',
      'thickness',
      'nu_of_panels',
      'width',
      'height',
      'track',
      'new_track',
      'assembled_height',
      'opening_width',
      'unpackaged_weight',
      'optional_nu_of_panels',
      'mu',
      'bt_of_panels',
      'trim',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */

    protected $dates = ['deleted_at'];
}
