<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;

class RegisterController extends Controller
{
    public function register()
    {
        return view('templates.register');
    }

    public function store(Request $request)
    {
        $validated_data = $request->validate([
            "name"      => 'required|max:255',
            "email"     => 'required|email|unique:users',
            "uname"     => 'required|min:5|max:20|unique:users',
            "password"  => 'required|min:5|required_with:passConf|same:passConf',
            "passConf"  => 'min:5',
            "prof_pic"  => 'required'
        ]);

        $validated_data['password'] = Hash::make($validated_data['password']);
        
        User::create($validated_data);

        return redirect('/')->with('successReg', 'Akun ada berhasil dibuat.');
    }

    public function isStoredEmail($emailAddress){
        
        $isStored = User::firstWhere('email', $emailAddress);
        
        return Response::json($isStored);
    }

    public function isStoredUname($userName){
        
        $isStored = User::firstWhere('uname', $userName);

        return Response::json($isStored);
    }
}
