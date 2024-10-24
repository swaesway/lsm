<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Hash;

class authManager extends Controller
{
    //functions for registration and login
    function login(){
      
            return view('auth/login');
    }
    function signup(){

            return view('auth/signup');
    }

    function userlogin(){
        return view('auth/user-login');
    }

    function loginpostadmin(Request $request)
    {
        $request->validate([
            'email'=> 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        if(FacadesAuth::attempt($credentials))
        {
            return redirect()->intended(route('dashboard'));
        }
        return redirect()->intended(route('adminlogin'))->with('error', 'invalid credentials');

    }
    function signuppostadmin(Request $request)
    {
        $data = new User();
        $request->validate([
            'name'=> 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

       $data -> name = request("name");
       $data -> email = request("email");
       $data -> password = Hash::make(request('password'));

       $data->save();
       if(!$data)
       {
        return redirect()->intended(route('adminsignup.page'))->with('error', 'error creating account check details');
       }
       return redirect()->intended(route('dashboard'));
       
    }
    
}
