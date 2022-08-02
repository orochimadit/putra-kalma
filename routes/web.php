<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BankController;
use App\Http\Controllers\HousingController;
use App\Http\Controllers\LotController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test',function(){
    return view('layouts.index');
});

Route::get('/home',function(){
    return view('user.home');
});

Route::get('/coba',function(){
    return view('admin.auth.login');
});

Route::get('/dashboard',function(){
    return view('admin.dashboard.index');
});
Route::view('banks','admin.bank.index');

// Route::view('housings','admin.housing.index');
Route::view('lots','admin.lot.index');
Route::resource('housings',HousingController::class);
Route::resource('lots',LotController::class);
// Route::resource('bank', BankController::class);