<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class STateTax extends Model
{
    protected $table='state_tax';
    protected $fillable = [
        'state_id',
        'tax_id',
    ];

    public function state()
    {
        return $this->belongsTo('App\Models\State');
    }

    public function tax()
    {
        return $this->belongsTo('App\Tax');
    }
}
