<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    //
    function index(){

      $employee = new Employee();

      $employee->setAttribute('Man_No','3883');
      $employee->setAttribute('Name','Michael Sinkolongo');
      $employee->setAttribute('Email_Address','michaelsinkolongo@gmail.com');


     // $employee->save();


/*
        Employee::create(
              [
                "Man_No"=>"3883",
                "Name"=>"Michael Sinkolongo",
                "Email_Address"=>"michaelsinkolongo@gmail.com",
              ]

            );
        */

        //$department = Employee::all()[0]->department();
        /*dd(
          $department->Name
        );*/

        $employee = Employee::with('department')->first(); // load the relation
        dd($employee->department?->Name); //Correct: access the loaded related model's Name



        return view("employees",[
            "employees"=>Employee::all()
        ]);
    }
}
