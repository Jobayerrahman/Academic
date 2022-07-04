<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ResultController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/react-home', function () {
    return view('reacthome');
});

Route::get('/bootstrap-home', function () {
    return view('bootstraphome');
});

Route::get('/student-list',[StudentController::class,'index']);
Route::get('/student-create',[StudentController::class,'create']);
Route::post('student-store',[StudentController::class,'store']);
Route::get('student-edit/{id}',[StudentController::class,'edit']);
Route::post('student-store/{id}',[StudentController::class,'store']);
Route::get('student-delete/{id}',[StudentController::class,'destroy']);



Route::get('course-view',[CourseController::class,'index']);
Route::get('course-create',[CourseController::class,'create']);
Route::post('course-store',[CourseController::class,'store']);
Route::get('course-edit/{id}',[CourseController::class,'edit']);
Route::post('course-store/{id}',[CourseController::class,'store']);
Route::get('course-delete/{id}',[CourseController::class,'destroy']);




Route::get('result-view/{id}',[ResultController::class,'result']);
Route::get('course-add/{id}',[ResultController::class,'select']);
Route::post('result-store',[ResultController::class,'store']);
Route::get('result-edit/{id}',[ResultController::class,'edit']);
Route::post('result-store/{id}',[ResultController::class,'store']);
Route::get('result-delete/{id}',[ResultController::class,'destroy']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
