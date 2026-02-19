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
        // $student = Student::all();
        $student = Student::paginate(5);
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
        $student = Student::find($id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        if ($student->save()) {
            return redirect('list');
        } else {
            return "update operation failed";
        }

        // return $id;
        // return $request->input();
    }
    function search(Request $request)
    {
        $searchData = Student::where('name', 'like', "%$request->search%")->paginate(5);
        return view('list-students', ['students' => $searchData, 'search' => $request->search]);
    }
    function deleteMultiples(Request $request)
    {
        $result = Student::destroy($request->ids);
        if ($result) {
            return redirect('list');
        } else {
            return "student data not deleted";
        }
        // return $request->ids;
    }
}
