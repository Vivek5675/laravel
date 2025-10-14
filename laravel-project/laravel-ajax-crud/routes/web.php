<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/',[TodoController::class,'index']);
Route::get('todos/{todo}/edit',[TodoController::class,'edit']);
Route::post('todos/store',[TodoController::class,'store']);
Route::delete('todos/destroy/{todo}',[TodoController::class,'destroy']);

