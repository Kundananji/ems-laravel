<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    //
    function login(Request $request){

        return view("login");
    }


        function authenticate(Request $request){

           if(Auth::attempt([
             "email"=>$request->input("email"),
              "password"=>$request->input("password")
           ])){

              return redirect("home");

           }
        
        return view("login");
    }


     function logout(){
        Auth::logout();
        return redirect("login");
     }


}
