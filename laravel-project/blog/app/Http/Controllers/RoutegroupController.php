<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutegroupController extends Controller
{
    public function show(){
        return "student list";
    }
    public function add(){
        return "new student added";
    } 
    public function delete(){
        return "student deleted";
    }
    public function about($name){
        return $name;
    }
}
