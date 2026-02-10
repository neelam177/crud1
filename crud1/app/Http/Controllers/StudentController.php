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
}
