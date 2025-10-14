<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DBQueryBuilderController extends Controller
{
    //
    public function queries(){
        /* View/Show data queries */
        $result = DB::table('users')->get();

        // $result = DB::table('users')->where('phone','1231231231')->get();

        // $result = DB::table('users')->first();
        // $result = [$result];

        return view('dbQueryBuilder',['querydata'=>$result]);


        /* Insert data queries */
        // $result = DB::table('users')->insert([
        //     'name'=>'vivek',
        //     'email'=>'vivek@gmail.com',
        //     'phone'=>'1111122222',
        // ]);
        // if($result){
        //     return "Data Inserted";
        // }else{
        //     return "Data Not Inserted";
        // }


        /* Update data queries */
        // $result = DB::table('users')->where('name','omkar')->update(['email'=>'omkar66@gmail.com']);
        // if($result){
        //     return "Data Updated";
        // }else{
        //     return "Data Not Updated";
        // }


        /* Delete data queries */
        // $result = DB::table('users')->where('id','8')->delete();
        // if($result){
        //     return "Data Deleted";
        // }else{
        //     return "Data Not Deleted";
        // }
    }
}
