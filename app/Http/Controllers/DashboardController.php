<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard(){
        // if(Auth::user()->hasRole('Admin')){
            return route('/dashboard');
        // }else{
        //     return route('/');
        // }
    }
}
