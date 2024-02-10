<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function create(Request $request){
        
        $validatedData = $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:1'
        ]);

        $user = User::create([
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);
        Auth::login($user);
        return redirect()->route('basic-details');
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            
            return redirect()->route('index');
        }

        // If authentication fails, return back to the login page with errors
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(){
        Auth::logout();

        return redirect()->route('login');
    }
}
