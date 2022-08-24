<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class DashboardController extends Controller
{
    public function dashboard(){
        if(Auth::user()->hasRole('Admin')){
            return view('admin.dashboard.index');
        }else{
            return redirect()->route('home');
        }
    }
}
