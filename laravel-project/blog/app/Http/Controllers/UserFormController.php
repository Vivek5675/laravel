<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFormController extends Controller
{
    public function addUser(Request $req){
        $req->validate([
            'username'=>'required | min:3 | max:10',
            'email'=>'required | email',
            'city'=>'required | max:20',
            'skill'=>'required',
        ],[
            'username.required'=>'username can not be empty.',
            'username.min'=>'username min charcters should be 3.',
            'email.email'=>'This email is not correct.',
        ]);
        return $req;
        // echo " Username is : $req->username";
        // echo '<br>';
        // echo " Email is : $req->email";
        // echo '<br>';
        // echo " City is : $req->city";
    }
}
