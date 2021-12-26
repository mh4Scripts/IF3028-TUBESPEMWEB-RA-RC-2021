<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request){
        
        $credentials = $request->validate([

            "email"    => 'required|email',
            "password" => 'required'

        ]);

        if(Auth::attempt($credentials)){

            $request->session()->regenerate();

            return back()->with('LoginSuccess', 'Anda sudah berhasil masuk!');
            
        }

        return back()->with('LoginError', 'Email atau Kata Sandi salah!');


    }
    public function logout(Request $request){
        
        Auth::logout();

        $request->session()->invalidate();
        
        $request->session()->regenerateToken();

        return back()->with('logoutSuccess', 'Anda sudah berhasil keluar!');

    }
    public function loginRequired(){

        return back()->with('loginRequired', 'Anda harus masuk terlebih dahulu!');

    }
}
