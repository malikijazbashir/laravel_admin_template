<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return view('admin.login');
    }
    // public function login(){


    // $rules = array(
    //   'email' => 'required|email', // make sure the email is an actual email
    //   'password' => 'required|alphaNum|min:8'
    //   // password has to be greater than 3 characters and can only be alphanumeric and);
    //   // checking all field
    //   $validator = Validator::make(Input::all() , $rules);
    //   // if the validator fails, redirect back to the form
    //   if ($validator->fails())
    //     {
    //     return Redirect::to('login')->withErrors($validator) // send back all errors to the login form
    //     ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
    //     }
    //     else
    //     {
    //     // create our user data for the authentication
    //     $userdata = array(
    //       'email' => Input::get('email') ,
    //       'password' => Input::get('password')
    //     );
    //     // attempt to do the login
    //     if (Auth::attempt($userdata))
    //       {
    //       // validation successful
    //       // do whatever you want on success
    //       }
    //       else
    //       {
    //       // validation not successful, send back to form
    //       return Redirect::to('checklogin');
    //       }
    //     }
    //   }
}
