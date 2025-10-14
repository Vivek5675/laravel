<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EloquentQuery;

class EloquentQueryController extends Controller
{
    //
    public function eloquentquery(){
        // $response = EloquentQuery::all();
        $response = EloquentQuery::get(); //get and all function work as same.

        // $response = EloquentQuery::where('batch','2018')->get();

        // $response = EloquentQuery::where('batch','2015')->first();
        // $response = EloquentQuery::first();
        // $response = [$response];

        // $response = EloquentQuery::find(4);
        // $response = [$response];

        // $response = EloquentQuery::insert([
        //     'name'=>'Peter England',
        //     'email'=>'peter_england@gmail.com',
        //     'batch'=>'1988',
        // ]);
        // if($response){
        //     return "Data Inserted";
        // }else{
        //     return "Data Not Inserted";
        // }


        // $response = EloquentQuery::where('name','allen solly')->update(['batch'=>'2010']);
        // if($response){
        //     return "Data Updated";
        // }else{
        //     return "Data Not Updated";
        // }


        // $response = EloquentQuery::where('name','allen solly')->delete();
        // if($response){
        //     return "Data Deleted";
        // }else{
        //     return "Data Not Deleted";
        // }

        return view('eloquentQuery',['data'=>$response]);
    }
}
