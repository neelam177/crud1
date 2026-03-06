<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    function list()
    {
        $test = Test::all();
        return view('listTest', ['data' => $test]);
    }
    function add(Request $request)
    {
        // $test = new Test();
        // $test->name = $request->name;
        // $test->email = $request->email;
        // $test->phone = $request->phone;
        // $test->age = $request->age;
        // $test->save();
        // if ($test) {
        //     return redirect('test-list');
        // } else {
        //     return "Data not Inserted";
        // }

        //option2
        $test = Test::create($request->post());
        if ($test) {
            return redirect('test-list');
        } else {
            return "Data not Inserted";
        }
    }

    function testTry($id)
    {
        $test = Test::find($id);
        return view('editTest', ['editData' => $test]);
    }
    function editTest(Request $request, $id)
    {
        $edit = Test::find($id);
        $edit->name = $request->name;
        $edit->email = $request->email;
        $edit->phone = $request->phone;
        $edit->age = $request->age;
        if ($edit->save()) {
            return redirect('/test-list');
        } else {
            return "update operation failed";
        }
    }
    function deleteTest($id)
    {
        Test::destroy($id);
        return redirect('test-list');
    }

    function save(){
       $test = new Test();
       $test->name = "hiya";
       $test->email ="hiya@gmail.com";
       $test->age=13;
       $test->phone = "71651212";
       if($test->save()){
        echo "new emp added";
       }
    }
}
