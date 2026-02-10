<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('users',[UserController::class,'users']);
Route::get('users1', [UserController::class, 'getUser']);


Route::get('students', [StudentController::class, 'getStudents']);

Route::get('query', [UserController::class, 'queries']);
