<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WhStockOpnameDet extends Model
{
    use SoftDeletes;

    protected $guarded  = ['id'];

    // public function ProductPrice()
    // {
    //     return $this->hasMany('App\ProductPrice');
    // }

    // public function ProductType()
    // {
    //     return $this->belongsTo('App\ProductType');
    // }
}
