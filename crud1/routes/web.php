<?php

use App\Http\Controllers\QueryModel;
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

Route::view('test', 'hello');
Route::get('model-query', [QueryModel::class, 'queries']);




// Form crud
Route::get('form', function () {
    return view('formData');
});
Route::post('users', [UserController::class, 'get']);
Route::get('users', [UserController::class, 'get']);



Route::view('add','add-student');
Route::post('add',[StudentController::class,'add']);
