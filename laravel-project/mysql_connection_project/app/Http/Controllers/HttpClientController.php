<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HttpClientController extends Controller
{
    //
    public function getClient(){
        $response = Http::get('https://jsonplaceholder.typicode.com/users/1');//this is api.
        $response = $response->body();
        return view('httpClient',['data'=>json_decode($response)]);
        // return $response;
        // return $response->body();
        // return $response->headers();
        // return $response->status(); //know the status of api, api run successfully then return 200,server side error =500,when api path not correct then error no = 404.
    }
}
