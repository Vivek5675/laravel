<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function seller_mto_Data(){
        return $this->belongsTo('App\Models\Product','seller_id');
    }
}
