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

    function forgot(Request $request)
    {

        return view("forgot");
    }


    function forgotPassword(Request $request)
    {
        $email = $request->input('email');
        
        //validatation
        if($email == null){
            $request->session()->flash("error", "Please enter email or username");

        }

        //Check if an account exists with the given email
        $user = User::where('email',$email)->first();

        if($user !=null){
             //If we find an acount, create reset link and send it in an email

             //We are going to generate a random token, which we shall then send into the email

             //The token identifies which account to reset

             //The user is then going to use that token to complete the reset process

             //If the token does not match with what is on the database, we discard the request
             
        }
             

        $request->session()->flash("success", "Request completed. If a user exists with the given email, we shall send the reset instruction to the email.");

        return view("forgot");
    }

    /**
     * Displays reset page
     * @param \Illuminate\Http\Request $request
     * @return \IlluminaSummary of resette\Contracts\View\View
     */
    function reset(Request $request){

         $token = $request->input('token');  


         return view('reset',[
            "token"=>$token
         ]);
    }

    /**
     * Complete password reset
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\View\View
     */
    function completeReset(Request $request){

        //validate the input

         $token = $request->input('token');
         $password = $request->input('password');

         //if token is invalid, return request expired

         //If token is valid, complete the rest process

         //Find account associated with token

         //Once account is found, reset the password
   


         return view('reset');
    }
    function authenticate(Request $request)
    {

        if (Auth::attempt([
            "email" => $request->input("email"),
            "password" => $request->input("password")
        ]))
         {

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
