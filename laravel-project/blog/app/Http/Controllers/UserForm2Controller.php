<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserForm2Controller extends Controller
{
    public function adduser(Request $req){
        // return $req;
        print_r($req->skill);
        echo '<br>';
        echo " Gender is : $req->gender";
        echo '<br>';
        echo " City is : $req->city";
        echo '<br>';
        echo " Age is : $req->age";
    }
}
