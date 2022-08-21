<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BankController;
use App\Http\Controllers\HousingController;
use App\Http\Controllers\LotController;
use App\Http\Controllers\KprController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\KonsumenController;
use App\Http\Controllers\DashboardController;
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

Route::get('/',[App\Http\Controllers\PenggunaController::class, 'home']);

Route::get('/test',function(){
    return view('layouts.index');
});

// Route::get('/home',function(){
//     return view('user.home');
// });

Route::get('/coba',function(){
    return view('admin.auth.login');
});

// Route::get('/dashboard',function(){
//     return view('admin.dashboard.index');
// });
// Route::view('banks','admin.bank.index');

// Route::view('housings','admin.housing.index');
Route::view('lots','admin.lot.index');
Route::resource('housings',HousingController::class);
Route::resource('lots',LotController::class);
Route::resource('kprs',KprController::class);
Route::resource('banks',BankController::class);
Route::resource('staff',StaffController::class);
Route::resource('konsumen',KonsumenController::class);
// Route::resource('bank', BankController::class);
Auth::routes();
Route::get('/dashboard',[App\Http\Controllers\DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contact', [App\Http\Controllers\PenggunaController::class, 'contact'])->name('contact');
Route::get('/home', [App\Http\Controllers\PenggunaController::class, 'home'])->name('home');
Route::get('/profile', [App\Http\Controllers\PenggunaController::class, 'profile'])->name('profile');
Route::get('/panduan', [App\Http\Controllers\PenggunaController::class, 'panduan'])->name('panduan');
Route::get('/kpr', [App\Http\Controllers\PenggunaController::class, 'kpr'])->name('kpr');
Route::get('/perumahan/{id}', [App\Http\Controllers\PenggunaController::class, 'perumahan'])->name('perumahan');
Route::get('/perumahan/{id}/kaveling', [App\Http\Controllers\PenggunaController::class, 'kaveling'])->name('kaveling');
Route::get('/kaveling/{id}/pengajuan', [App\Http\Controllers\PenggunaController::class, 'pengajuan'])->name('pengajuan');
Route::post('/kaveling/pengajuan', [App\Http\Controllers\PenggunaController::class, 'pengajuanStore'])->name('pengajuanStore');
Route::get('/invoice', [App\Http\Controllers\PenggunaController::class, 'invoice'])->name('invoice');
Route::get('/akun', [App\Http\Controllers\PenggunaController::class, 'akun'])->name('akun');
Route::get('/login', [App\Http\Controllers\PenggunaController::class, 'login'])->name('login');
Route::post('/authenticate', [App\Http\Controllers\PenggunaController::class, 'authenticate'])->name('authenticate');
