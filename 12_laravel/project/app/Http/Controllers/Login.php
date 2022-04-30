<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    public function index(Request $request){
       foreach ($request->input() as $key => $value){
           session([$key => $value]);
       }
       return redirect('profile');
    }

    public function logout(Request $request){
        session()->forget('user');
        session()->forget('pass');
        return redirect('login');
    }

    public function profile(){
        if (session('user') && session('pass')) {
            return view('profile');
        }
        return redirect('login');
    }
}
