<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    function getStudents()
    {

        echo Student::testFun();
        $students = Student::all();
        return view('students', ['data' => $students]);
    }
    function add(Request $request)
    {
        // $student->name = Database column (left side)
        // $request->name = Form input (right side)
        // return $request;
        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->save();
        if ($student) {
            return redirect('list');
        } else {
            return "Student not added";
        }
        // return $request->email;  
    }
    function list()
    {
        $student = Student::all();
        return view('list-students', ['students' => $student]);
    }
    function delete($id)
    {
        $isDeleted = Student::destroy($id);
        if ($isDeleted) {
            return redirect('list');
        }
    }
    function edit($id)
    {
        // return $id;
        $student = Student::find($id);
        return view('edit', ['data' => $student]);
    }
    function editStudent(Request $request, $id)
    {
        return $id;
    }
}
