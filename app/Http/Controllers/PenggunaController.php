<?php

namespace App\Http\Controllers;

use App\Models\Housing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Kpr;
use App\Models\Lot;
use App\Models\Sale;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

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

    public function kpr()
    {
        $kprs = Kpr::all();
        return view('user.kpr',compact('kprs'));
    }
    public function login()
    {
       
        return view('user.login');
    }

    public function perumahan($id)
    {
        $housing = Housing::find($id);
        return view('user.perumahan',compact('housing'));
    }

    public function pengajuanStore(Request $request)
    {
        if($request->file('ktp') && $request->file('npwp')){
            $ktp_path = $request->file('ktp')
            ->store('ktp_file', 'public');
            $npwp_path = $request->file('npwp')
            ->store('npwp_file', 'public');
            $npwp = $npwp_path;
            $ktp = $ktp_path;
            }

       $sale= Sale::Create([
            'name'   => $request->name,
            'payment_type' => $request->payment_type,
            'transaction_date'    =>  Carbon::createFromFormat('d-m-Y', $request->date),
            'ktp' => $ktp,
            'npwp' => $npwp,
            'status' => 'Diajukan',
            'user_id'  => $request->user_id,
            'housing_id'    => $request->housing_id,
            'lot_id'        => $request->lot_id
         ]);
        // return $sale;
        return redirect()->route('invoice')->with(['sale' => $sale]);
        // return view('user.kaveling',compact('lots','housing'));
    }

    public function invoice(Sale $sale)
    {       
        //Session::get('sale');
        // $sale = Sale::find($sale->id);
        return view('user.invoice',compact('sale'));
    }

    public function pengajuan($id)
    {
        //$housing = Housing::find($id);
        $lot = Lot::find($id);
        //$lots = Lot::where('housing_id',$id)->get();
       // dd($lot); 
       $date = Carbon::now()->format('d-m-Y');

         return view('user.transaksi',compact('lot','date'));
    }

    public function kaveling($id)
    {
        $housing = Housing::find($id);
        $lots = Lot::where('housing_id',$id)->get();
        //dd($lot); 
         return view('user.kaveling',compact('lots','housing'));
    }

    public function akun(){
        return view('user.akun');
    }
    public function daftar(){
        return view('user.register');
    }

    public function daftarStore(Request $request)
    {
       $user=  User::Create([
            'name'   => $request->name,
            'email' => $request->email,
            'password'    => Hash::make($request->password),
            'address' => $request->address,
            'phone_number' => $request->phone_number
        ]);
        $user->assignRole('User');
        return redirect()->route('daftar')->with('alert-success', 'Berhasil Register.');
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
