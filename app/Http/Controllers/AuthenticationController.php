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

        /*[
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(), 
            'email_verified_at' => now(),
            'profile'=>'employee',
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ]

        */
        User::create(
            [
            'name' => $request->input('name'),
            'email' => $request->input('email'), 
            'profile'=>'employee',
            'password' => $request->input('password')
            ]

        );
        return view("register");
    }
}
