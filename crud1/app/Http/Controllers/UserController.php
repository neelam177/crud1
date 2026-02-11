<?php

namespace App\Http\Controllers;

use Illuminate\Database\Console\Migrations\StatusCommand;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Symfony\Component\Routing\Route;

class UserController extends Controller
{
    //
    function users()
    {
        $users = DB::select('select * from users');
        dd($users); // Debug output
        return $users;
        $users = DB::select('select * from users');
        return view('users', ['users' => $users]);
    }
    function getUser()
    {
        // return "user get function";
        // $response = Http::get('https://jsonplaceholder.typicode.com/users/1');
        // return $response;

        // $response = Http::get('https://jsonplaceholder.typicode.com/users/1');
        // return $response->body();

        // $response = Http::get('https://jsonplaceholder.typicode.com/users/1');
        // return $response->status();

        $response = Http::get('https://jsonplaceholder.typicode.com/users/1');
        $response = $response->body();
        return view('users1', ['data' => json_decode($response)]);
    }

    // query builder
    function queries()
    {
        // return "queries";
        // $result = DB::table('users')->get();
        // $result = DB::table('users')->where('phone','1234')->get();
        // $result = DB::table('users')->first(); // it returns only 1 array so we can use $result=[$result];
        // $result = [$result];
        // // return $result; // i want to display data in view
        // return view('queries', ['query' => $result]);

        //insert 
        // $result = DB::table('users')->insert([
        //     'name' => 'tony',
        //     'email' => 'tony@gmail.com',
        //     'phone' => '123456987'
        // ]);
        // if ($result) {
        //     return "Data Inserted";
        // } else {
        //     return "data not inserted";
        // }

        //updated
        // $result = DB::table('users')->where('name', 'tony')->update(['phone'=>'111111']);
        // if ($result) {
        //     return "Data Updated";
        // } else {
        //     return "data not Updated";
        // }

        //deleted
        // $result = DB::table('users')->where('name', 'tony')->delete();
        // if ($result) {
        //     return "Data Deleted";
        // } else {
        //     return "data not Deleted";
        // }
    }

    // form data crud
    function get(Request $request)
    {
        return $request;
    }
}
