<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class LoginController extends Controller
{
    public function login()
    {
            return view('login');
    }

    public function actionlogin (Request $Request)
    {
        $data = [
            'email'    => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if(Auth::Attempt($data)){
            return redirect ('home');
        }else{
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/');
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }
}