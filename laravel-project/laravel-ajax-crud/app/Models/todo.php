<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
    // protected $namelable = ['name'];
    // protected $emaillable = ['email'];
    // protected $addresslable = ['address'];
     protected $fillable  = ['name','email','address'];
}
