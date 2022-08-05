<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenggunaController extends Controller
{
    //
    public function contact()
    {
       
        return view('user.contact');
    }

    public function profile()
    {
       
        return view('user.profil');
    }

    public function home()
    {
       
        return view('user.home');
    }

    public function panduan()
    {
       
        return view('user.panduan');
    }

    public function login()
    {
       
        return view('user.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required']
        ]);
 
        if (Auth::attempt($credentials)) {
            return redirect()->route('/dashboard');
        }
        return back()->with('loginError', 'Login failed');
    }
 
}
