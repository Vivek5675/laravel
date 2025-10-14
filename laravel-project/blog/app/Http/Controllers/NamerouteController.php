<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NamerouteController extends Controller
{
    public function show(){
        // return view('welcome');
        // return redirect()->to('profile/home/name-route');
        return to_route('nr');
    }
}
