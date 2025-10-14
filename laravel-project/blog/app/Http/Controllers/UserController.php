<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    function getUser(){
        // return "Vivek Kanzariya";
        return view('user');
    }

    function aboutUser(){
        return "This is about User datails.";
    }

    function getUserName($name){
        // return "Hello this is ".$name;
        return view('getuser',['name' => $name]);
    }

    function adminLogin(){
            return view('admin.login');
    }

    function signup(){
        if(View::exists('admin.sign')){
            return view('admin.sign');
        }else{
            echo "No View Found.";
        }
    }

    function userHome(){
        $name = "Vivek Kanzariya";
        $users = ['vivek','omkar','om','jaydev'];
        return view('home',["user" => $name,"arr" => $users]);
    }
}
