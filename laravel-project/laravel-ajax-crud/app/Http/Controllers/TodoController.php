<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todo;

class TodoController extends Controller
{
    public function index(){
        // return view('welcome',['todos'=>Todo::orderBy('id','DESC')->get()]);
        $data = todo::get();
        return view('welcome',['todos'=>$data]);
    }

    public function edit(todo $todo){
        return response()->json($todo);
    }

    public function store(Request $request){
        // return response()->json($request->all());
        $todo = todo::updateOrCreate(
            ['id'=>$request->id],
            [
                'name'=>$request->name,
                'email'=>$request->email,
                'address'=>$request->address
            ]
        );
        return response()->json($todo);
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();
        return response()->json('success');
    }
}
