<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    //
    function index()
    {

        $employee = new Employee();

        $employee->setAttribute('Man_No', '3883');
        $employee->setAttribute('Name', 'Michael Sinkolongo');
        $employee->setAttribute('Email_Address', 'michaelsinkolongo@gmail.com');


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
        // dd($employee->department?->Name); //Correct: access the loaded related model's Name



        return view("employee/employees", [
            "employees" => Employee::all()
        ]);
    }

    function create()
    {
        return view("employee/create");
    }


    function save(Request $request)
    {
        /*

                $manNo = $request['ManNo'];
                $name = $request['Name'];
                $emailAddress = $request['EmailAddress'];
                $department = $request['Department'];
                $supervisor = $request['Supervisor'];
                */
       // $manNo = $request->input('Man_No');

    
      
                
         $request->validate([
             'Man_No' => 'bail|required|string|max:4',
             'Name' => 'bail|required|string|max:255',
             'Email_Address' => 'bail|required|email|max:255|unique:employee',
             'Department_Id' => 'bail|required|integer',
             'Supervisor' => 'nullable|integer',
        ]);

        


        $employee = Employee::create(
            $request->all()
        );

    
        return redirect('/employees/create')->with('success', 'Employee successfully added!');

    }
}
