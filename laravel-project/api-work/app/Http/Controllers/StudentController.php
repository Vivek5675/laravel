<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Student;

class StudentController extends Controller {
    public function list() {
        return Student::all();
    }

    public function addStudent(Request $request) {
        $rules = array(
            'name' => 'required | min:2 | max:12',
            'email' => 'required | email',
            'batch' => 'required'
        );
        $validation = Validator::make($request->all(), $rules);
        if ($validation->fails()) {
            return $validation->errors();
        } else {
            $student = new Student();
            $student->name = $request->name;
            $student->email = $request->email;
            $student->batch = $request->batch;
            if ($student->save()) {
                return ["result" => "Student added"];
            } else {
                return ["result" => "Operation failed"];
            }
        }
    }

    public function updateStudent(Request $request) {
        $student = Student::find($request->id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->batch = $request->batch;
        if ($student->save()) {
            return ["result" => "Student updated"];
        } else {
            return ["result" => "Student not updated"];
        }
    }

    public function deleteStudent($id) {
        $student = Student::destroy($id);
        if ($student) {
            return ["result" => "Student record deleted"];
        } else {
            return ["result" => "Student record not deleted"];
        }
    }

    public function searchStudent($name) {
        $student = Student::where('name', 'like', "%$name%")->get();
        if ($student) {
            return ["result" => $student];
        } else {
            return ["result" => "No record found"];
        }
    }
}
