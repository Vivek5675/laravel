<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadImageController extends Controller
{
    // public function upload(Request $req){
    //     // echo "Upload function called";
    //     $path = $req->file('file')->store('public');
    //     $fileNameArray = explode("/",$path);
    //     $fileName = $fileNameArray[1];
    //     return view('displayImage',['path'=>$fileName]);

    // }

    public function upload(Request $req){
        $path = $req->file('file')->store('uploads', 'public');
        return view('displayImage', ['path' => $path]);
    }
}
