<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\HttpClientController;
use App\Http\Controllers\DBQueryBuilderController;
use App\Http\Controllers\EloquentQueryController;
use App\Http\Controllers\RouteMethodController;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\FlashSessUserController;
use App\Http\Controllers\UploadImageController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\SellerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('users',[UserController::class,'users']);
Route::get('students',[StudentController::class,'getStudents']);
Route::get('client',[HttpClientController::class,'getClient']);
Route::get('query',[DBQueryBuilderController::class,'queries']);
Route::get('eloquent_query',[EloquentQueryController::class,'eloquentquery']);

//-----------------------------------------------------------------------------------------

//Route Methods all Routes
// Route::get('getuser',[RouteMethodController::class,'get']);
// Route::post('getuser',[RouteMethodController::class,'post']);

// Route::put('getuser',[RouteMethodController::class,'put']);
// Route::delete('getuser',[RouteMethodController::class,'delete']);

// Route::any('getuser',[RouteMethodController::class,'any']);

Route::match(['get','post'],'/getuser',[RouteMethodController::class,'group1']);
Route::match(['put','delete'],'/getuser',[RouteMethodController::class,'group2']);

Route::view('form','routeMethod');

//----------------------------------------------------------------------------------------

//Session Login Management Routes
Route::view('login','login');
Route::view('profile','profile');

Route::post('login',[UserLoginController::class,'login']);
Route::get('logout',[UserLoginController::class,'logout']);

//Flash Session management Routes
Route::view('flashuser','flashSessUser');

Route::post('add',[FlashSessUserController::class,'adduser']);


//upload image/file Route
Route::view('upload','uploadImage');

Route::post('upload',[UploadImageController::class,'upload']);


//Image upload and display with database.............
Route::view('uploaddb','upload');

Route::post('uploaddb',[ImageController::class,'uploaddb']);

Route::get('list',[ImageController::class,'list']);


// relationship Routes
Route::get('oto',[SellerController::class,'oto']);
Route::get('otm',[SellerController::class,'otm']);
Route::get('mto',[SellerController::class,'mto']);