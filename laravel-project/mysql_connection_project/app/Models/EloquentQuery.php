<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EloquentQuery extends Model
{
    //
    protected $table = "students"; //for table name and model name are diffrent then use this.
    
    public $timestamps = false;
}
