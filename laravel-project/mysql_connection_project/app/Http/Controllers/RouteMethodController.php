<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteMethodController extends Controller
{
    //
    // public function get(Request $req){
    //     return $req;
    // }
    public function get(){
        return "Get Route Method";
    }
    public function post(){
        return "Post Route Method";
    }
    public function put(){
        return "Put Route Method";
    }
    public function delete(){
        return "Delete Route Method";
    }
    public function any(){
        return " This Is Any Method";
    }
    public function group1(){
        return " This Is Group 1 Method";
    }
    public function group2(){
        return " This Is Group 2 Method";
    }
}
