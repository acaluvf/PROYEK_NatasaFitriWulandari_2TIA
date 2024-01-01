<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function halamanlogin() {
        return view('login');

    }

    public function postlogin(Request $request) {
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/');
        }
        return redirect('/');

    }
    public function logout() {
        Auth::logout();
        return redirect ('/');

    }
    public function register(){
        return view('register');
    }

    public function simpanregister(Request $request){
        dd($request->all());
    }
}
