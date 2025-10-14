<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserLoginController extends Controller
{
    public function login(Request $request){
        $request->session()->put('user',$request->input('user'));
        $request->session()->put('allData',$request->input());
        // echo session('user');
        return redirect('profile');
    }
    public function logout(){
        session()->pull('user');
        return redirect('profile'); 
    }
}
