<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use validator;
use Auth;

class AuthController extends Controller
{
    public function index(){
        return view('admin.login');
    }
    public function checklogin(Request $request){
          $this->validate($request,[
           'email'   => 'required|email',
           'password' => 'required|alphaNum|min:3',
      ]);
      $userData=array(
          'email' => $request->email,
          'password' => $request->password,

      );
    
      if(Auth::attempt($userData)){
        return redirect('dashboard');
      }else{
        return back()->with('error','Wrong Login Details');
      }

    }
  public function logout()
{
    Auth::logout();

    return redirect('login');
}
    
}
