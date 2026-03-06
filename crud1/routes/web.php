<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\QueryModel;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

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



Route::view('add', 'add-student');
Route::post('add', [StudentController::class, 'add']);
Route::view('list', "list-students");
Route::get('list', [StudentController::class, 'list']);
Route::get('delete/{id}', [StudentController::class, 'delete']);
Route::get('edit/{id}', [StudentController::class, 'edit']);
Route::put('edit-student/{id}', [StudentController::class, 'editStudent']);
Route::get('search', [StudentController::class, 'search']);
Route::post('delete-multi', [StudentController::class, 'deleteMultiples']);



// Test crud operation
Route::get('test-list', [TestController::class, 'list']);
Route::get('test-add', function () {
    return view('add-test');
});
Route::post('test-add', [TestController::class, 'add']);
Route::get('test-edit/{id}', [TestController::class, 'testTry']);
Route::put('test-update/{id}', [TestController::class, 'editTest']);
Route::get('delete-test/{id}', [TestController::class, 'deleteTest']);

//option 2
// Route::resource('tests',TestController::class);

Route::get('save', [TestController::class, 'save']);
Route::get('list', [SellerController::class, 'list']);
Route::get('many-to-One', [SellerController::class, 'manyToOne']);

// Route::get('send-mail',[MailController::class,'sendMail']);
Route::post('send-mail', [MailController::class, 'sendMail']);
Route::view('send-mail', 'send-mail');

// Route::get('device/{key}',[SellerController::class,'index']);
Route::get('device/{key:name}',[SellerController::class,'index']);

// inline blade template
Route::get('product',[SellerController::class,'productData']);


// 1️⃣ Normal String Functions
// $info = "hi let's learn laravel";
// $info = Str::replaceFirst('hi','Hello',$info);
// $info = Str::ucfirst($info);
// $info = Str::camel($info);
// echo $info;

// 2️⃣ Fluent String (Method Chaining)

// $info = "hi let's learn laravel";
// $info = Str::of($info)
//     ->ucfirst($info)
//     ->replaceFirst('hi', 'Hello')
//     ->camel($info);
// echo $info;
