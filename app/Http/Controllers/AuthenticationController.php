<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthenticationController extends Controller
{
    //
    function login(Request $request)
    {

        return view("login");
    }


    function authenticate(Request $request)
    {

        if (Auth::attempt([
            "email" => $request->input("email"),
            "password" => $request->input("password")
        ])) {

            return redirect("home");
        }

        $request->session()->flash("error", "Invalid credentials");
        return view("login");
    }


    function logout()
    {
        Auth::logout();
        return redirect("login");
    }

    function register(Request $request)
    {
        return view("register");
    }

    function saveUser(Request $request)
    {

        $request->validate([
             'name' => 'bail|required|string|max:255',
             'email' => 'bail|required|email|max:255|unique:users',
             'password' => 'bail|required|confirmed',
        ]);

        if(preg_match('/adfsfdf/',$request->input('password'))){
            //ToDo how to throw back a custom validation error
        }


        User::create(
            [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'profile'=>'employee',
            'password' => bcrypt($request->input('password'))
            ]

        );
        //$request->session()->flash("success", "User registered successfully");
        return redirect()->route('login')->with('success', 'Your account has been successfully created. Login below:');
    }
}
