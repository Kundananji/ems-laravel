<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//View Employees
Route::get('/employees/view',[EmployeeController::class,'index']);


//Get Employee Form
Route::get('/employees/create',[EmployeeController::class,'create']);


//Save Employee Form
Route::get('/employees/save',[EmployeeController::class,'save']);
