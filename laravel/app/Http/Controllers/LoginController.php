<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function authenticate(Request $request){
        $request->validate([
            "email"    => 'required|email',
            "password" => 'required'
        ]);

        dd('BERHASIL LOGIN');
    }
}
