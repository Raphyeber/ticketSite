<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{

    public function index() {
        return view('register');
    }
    
    public function store(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|max:64',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:16|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@$!%*?&]/|regex:/^\S+$/'
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
     
        
        return redirect("/login")->with('success', 'Registrasi sukses! Silahkan login');
    }
}
