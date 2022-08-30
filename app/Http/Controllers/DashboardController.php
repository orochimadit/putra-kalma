<?php

namespace App\Http\Controllers;

use App\Models\DevelopmentProgress;
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

    public function report(){
        return view('admin.report.index');
    }

    public function progressRep(){
        $developmentProgress = DevelopmentProgress::all();
        return view('admin.report.progress-rep',compact('developmentProgress'));
    }
}
