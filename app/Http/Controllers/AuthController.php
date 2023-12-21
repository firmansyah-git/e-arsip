<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('pages.login');
    }
    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'username' => 'required|min:4|max:255',
            'password' => 'required|max:255',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/');
        }
 
        return back()->with('failed', 'Username atau password salah!');
    }

    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/login');
    }
}
