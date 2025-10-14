<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function users(){
        $users = DB::select('select * from users1');
        return view('users',['users'=>$users]);
    }
}
