<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AuthenticationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth;

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');


Route::get('/login', [AuthenticationController::class,'login'])->name('login');


Route::post('/login', [AuthenticationController::class,'authenticate']);


Route::get('/logout', [AuthenticationController::class,'logout'])->name("logout");




//View Employees
Route::get('/employees/view',[EmployeeController::class,'index'])->name('myemployees');


//Get Employee Form
Route::get('/employees/create',[EmployeeController::class,'create']);


//Save Employee Form
Route::post('/employees/save',[EmployeeController::class,'save']);

Route::get('/home', function(){
    return view('home');
})->name("home");

