<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserForm2Controller;
use App\Http\Controllers\UserFormController;
use App\Http\Controllers\NamerouteController;
use App\Http\Controllers\RoutegroupController;
use App\Http\Middleware\AgeCheck;
use App\Http\Middleware\CountryCheck;
use App\Http\Controllers\SellerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

// Route::view('/home','home');

// Route::redirect('/home','/');


Route::get('/about/{name}', function ($name) {
    //echo $name;
    return view('about',['name'=>$name]);
});

//-----------------------------------------------------------------------

Route::get('user',[UserController::class,'getUser']);
Route::get('aboutName',[UserController::class,'aboutUser']);
Route::get('userName/{name}',[UserController::class,'getUserName']);
Route::get('admin',[UserController::class,'adminLogin']);
Route::get('sign',[UserController::class,'signup']);
Route::get('home',[UserController::class,'userHome']);

//-----------------------------------------------------------------------

//forms all routes from user-form file

Route::view('form','user-form');
Route::post('adduser',[UserFormController::class,'addUser']);

//forms all routes from user-form2 file
Route::view('form2','user-form2');
Route::post('addinfo',[UserForm2Controller::class,'adduser']);

//------------------------------------------------------------------------

//url genration routes

Route::view('url-genration','urlGenration');

//------------------------------------------------------------------------

//Name-Routes page all route

Route::view('name-route','nameRoute');
Route::view('profile/home/name-route','nameRoute')->name('nr');
Route::get('show',[NamerouteController::class,'show']);

//-----------------------------------------------------------------------

//Route-Group all route

// Route::prefix('student/another_name')->group....
Route::prefix('student')->group(function(){
    Route::view('route-group','routeGroup');
    Route::get('/showdata',[RoutegroupController::class,'show']);
    Route::get('/adddata',[RoutegroupController::class,'add']);
});

//Controller-group with global | middleware in global

Route::controller(RoutegroupController::class)->group(function(){
    Route::get('showcont','show');
    Route::get('addcont','add');
    Route::get('deletecont','delete');
    // Route::get('about/{name}','about');
});

//controller-group with group | middleware in single and multiple.

Route::view('rou-mid','route-middle')->middleware('check1');

//apply middleware with group

// Route::middleware('check1')->group(function(){
//     Route::view('rou-mid','route-middle');
// });

//apply middleware on route with single and multiple route.

Route::view('rou-mid','route-middle')->middleware([AgeCheck::class,CountryCheck::class]);