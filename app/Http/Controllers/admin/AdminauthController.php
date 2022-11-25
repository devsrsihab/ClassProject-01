<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminauthController extends Controller
{
    // get login method
    public function getlogin()
    {
       return view('admin.auth.login');
       
    }

    // loginAction method
    public function loginAction(Request $request)
    {

      $data = [
        'email' => $request->email,
        'password' => $request->password
      ];

      if (Auth::guard('admin')->attempt($data)) {
        return redirect('admin/dashboard');
        // return ('Successfully done');
    }
    else
    {
        return redirect()->back();
        // dd($request->all());
    }

    }



    // log out 
    public function logOut()
    {
      Session::flush();
      Auth::logOut();
      return redirect()->route('AminLogin');

    }

    // getRegister method returns
    public function getRegister()
    {
      # code...
    }
    // registerAction method returns
    public function registerAction()
    {
      # code...
    }

}
