<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    public function uploaddb(Request $request){
        $path = $request->file('file')->store('uploads','public');

        $pathArray = explode("/",$path);
        $imgpath = $pathArray[1];

        $img = new Image();
        $img->path = $imgpath;
        if($img->save()){
            return redirect('list');
        }else{
            return "Error ! Try Again....";
        }
    }

    public function list(){
        $images = Image::all();
        return view('display',['imgData'=>$images]);
    }
}
