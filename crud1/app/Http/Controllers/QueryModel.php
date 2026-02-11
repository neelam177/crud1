<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Pest\Laravel\get;

class QueryModel extends Controller
{
    //
    function queries()
    {
        $response = User::all();
        // $response = User::all();
        // $response = User::get();
        // $response = User::where('phone','1234')->get();
        // $response = User::where('phone', '1234')->first();
        // $response = User::first();
        // $response = [$response];
        // $response = User::find(1);


        // $response = DB::table('users')->first();
        // $response=[$response];
        
        //insert 
        $result = User::insert([
            'name' => 'heena',
            'email' => 'heena@gmail.com',
            'phone' => '14456987'
        ]);
        if ($result) {
            return "Data Inserted";
        } else {
            return "data not inserted";
        }

        return view('modelQuery', ['user' => $response]);
    }
}
