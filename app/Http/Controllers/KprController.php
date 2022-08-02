<?php

namespace App\Http\Controllers;

use App\Models\Kpr;
use App\Http\Requests\StoreKprRequest;
use App\Http\Requests\UpdateKprRequest;
use App\Models\Bank;

class KprController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kprs = Kpr::all();
        return view('admin.kpr.index',compact('kprs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $banks = Bank::all();
        return view('admin.kpr.create',compact('banks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKprRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKprRequest $request)
    {
        Kpr::Create([
             'loan_amount'   => $request->loan_amount,
             'range_time' => $request->range_time,
             'bank_interest'    => $request->bank_interest,
             'installment' => $request->installment,
             'bank_id' => $request->bank_id
         ]);
         return redirect()->route('kprs.index')->with('alert-success', 'KPR Berhasil ditambah.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kpr  $kpr
     * @return \Illuminate\Http\Response
     */
    public function show(Kpr $kpr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kpr  $kpr
     * @return \Illuminate\Http\Response
     */
    public function edit(Kpr $kpr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKprRequest  $request
     * @param  \App\Models\Kpr  $kpr
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKprRequest $request, Kpr $kpr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kpr  $kpr
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kpr $kpr)
    {
        try {
            $kpr->delete();
        } catch (\Throwable $th) {
            return back()->with('alert-danger',$th->getMessage());
        }
        return redirect()->route('kprs.index')->with('alert-success', 'Data Berhasil berhasil dihapus');
    }
}
