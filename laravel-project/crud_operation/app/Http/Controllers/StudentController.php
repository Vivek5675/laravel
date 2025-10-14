<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function add(Request $request){
        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->save();

        if($student){
            return redirect('list');
        }else{
            echo "Something Went Wrong, Student Not Added.";
        }
    }

    public function list(){
        // $studentData = student::all();
        $studentData = Student::paginate(5);
        return view('list-student',['data'=>$studentData]);
    }

    public function delete($id){
        $isDeleted = Student::destroy($id);

        if($isDeleted){
            return redirect('list');
        }
    }

    public function edit($id){
        $student = Student::find($id);
        return view('edit',['studata'=>$student]);
    }

    public function editStudent(Request $request,$id){
        $student = Student::find($id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        
        if($student->save()){
            return redirect('list');
        }else{
            return "Update Operation Failed";
        }
    }

    public function search(Request $request){
        // $searchData = Student::where('name','like',"%$request->search%")->get();
        $searchData = Student::where('name','like',"%$request->search%")->paginate(5);
        return view('list-student',['data'=>$searchData,'search'=>$request->search]);
    }

    public function deleteMultiple(Request $request){
        $result = Student::destroy($request->ids);

        if($result){
            return redirect('list');
        }else{
            return "Students Data Not Deleted.";
        }
    }
}