<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AuthenticationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth;

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');


//Login routes
Route::get('/login', [AuthenticationController::class,'login'])->name('login');
Route::post('/login', [AuthenticationController::class,'authenticate']);
Route::get('/logout', [AuthenticationController::class,'logout'])->name("logout");

//Forgot Password routes
Route::get('/forgot', [AuthenticationController::class,'forgot'])->name('forgot');
Route::post('/forgot-request', [AuthenticationController::class,'forgotPassword'])->name('forgot-request');

Route::get('/reset', [AuthenticationController::class,'reset'])->name('reset');

Route::get('/complete-reset', [AuthenticationController::class,'completeReset'])->name('complete-reset');

//Registration routes
Route::get('/register', [AuthenticationController::class, 'register'])->name('register');

Route::post('/register',[AuthenticationController::class, 'saveUser'])->name("register-user");


//View Employees
Route::get('/employees/view',[EmployeeController::class,'index'])->name('myemployees');


//Get Employee Form
Route::get('/employees/create',[EmployeeController::class,'create']);


//Save Employee Form
Route::post('/employees/save',[EmployeeController::class,'save']);

Route::get('/home', function(){
    return view('home');
})->name("home");

