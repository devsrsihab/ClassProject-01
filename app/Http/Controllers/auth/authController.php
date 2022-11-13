<?php

namespace App\Http\Controllers\auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class authController extends Controller
{
    // get login method
    public function getLogin()
    {
       return view('auth.login');
    }

    // loginAction method
    public function loginAction(Request $request)
    {
      //login validate
      $request->validate([
        'email' => 'required|email',
        'password' => 'required',
      ]);

    //login code
       if (Auth::attempt($request->only('email','password'))) {
           return redirect('studetn_dashoard');
       }
       else
       {
        return redirect('login')->withErrors('Login Details Are Not Valid');
       }

    }

    // log out 
    public function logOut()
    {
      Session::flush();
      Auth::logOut();
      return redirect('/');

    }

    // get Register method
    public function getRegister()
    {
       return view('auth.register');
    }

    // get Register Action method
    public function registerAction(Request $request)
    {
       //register validation
       $request->validate([
        'name' => 'required',
        'email' => 'required|unique:users|email',
        'password' => 'required|confirmed'
       ]);

       // save user in database table
       User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
       ]);

       // after sign up redirect to login 
       if (Auth::attempt($request->only('email','password'))) {
           return redirect('/');
       }
       else
       {
           return redirect('register')->withErrors('Error');
       }
    }
}
