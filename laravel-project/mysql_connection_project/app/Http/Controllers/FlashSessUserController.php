<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlashSessUserController extends Controller
{
    public function adduser(Request $request){
        //your database code here...
        $request->session()->flash('message','User has been added successfully ');
        $request->session()->flash('name',$request->input('user'));
        return redirect('flashuser');
    }
}
