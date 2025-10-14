<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Requests\StoreRequest;
use App\Http\Requests\UpdateRequest;

class StudentController extends Controller {

    public function add(StoreRequest $request) {
        // $student = new Student();
        // $student->name = $request->name;
        // $student->email = $request->email;
        // $student->phone = $request->phone;
        // $student->save();

        $validate = $request->validated();

        $student = new Student();
        $student->name = $validate['name'];
        $student->email = $validate['email'];
        $student->phone = '+91 ' . ltrim($validate['phone'], '0');
        $student->save();

        if ($student) {
            return redirect('list')->with('success', 'Student added successfully!');
        } else {
            return redirect()->back()->with('error', 'Something Went Wrong, Student Not Added.');
        }
    }

    public function list() {
        // $studentData = student::all();
        $studentData = Student::paginate(10);
        return view('list-student', ['data' => $studentData]);
    }

    public function delete($id) {
        $isDeleted = Student::destroy($id);

        if ($isDeleted) {
            return redirect('list')->with('success', 'Student deleted successfully!');
        } else {
            return redirect('list')->with('error', 'Failed to delete student.');
        }
    }

    public function edit($id) {
        $student = Student::find($id);
        return view('edit', ['studata' => $student]);
    }

    public function editStudent(UpdateRequest $request, $id) {
        $student = Student::find($id);

        $validate = $request->validated();

        $student->name = $validate['name'];
        $student->email = $validate['email'];
        $phone = preg_replace('/^\+91|^0+/', '', $validate['phone']);
        $student->phone = '+91 ' . $phone;
    
        if ($student->save()) {
            // return redirect('list');
            return redirect('list')->with('success', 'Student updated successfully!');
        } else {
            return redirect('list')->with('error', 'Failed to Update student.');
        }
    }

    public function search(Request $request) {
        // $searchData = Student::where('name','like',"%$request->search%")->get();
        $searchData = Student::where('name', 'like', "%$request->search%")->paginate(10);
        return view('list-student', ['data' => $searchData, 'search' => $request->search]);
    }

    public function deleteMultiple(Request $request) {
        $result = Student::destroy($request->ids);

        if ($result) {
            // return redirect('list');
            return redirect('list')->with('success', 'Selected students deleted successfully!');
        } else {
            return redirect('list')->with('error', 'Students data not deleted.');
        }
    }
}
