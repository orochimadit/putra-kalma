<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
