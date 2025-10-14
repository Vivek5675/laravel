<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    public function product_oto_Data(){
        return $this->hasOne('App\Models\Product','seller_id');
    }

    public function product_otm_Data(){
        return $this->hasMany('App\Models\Product');
    }
}
