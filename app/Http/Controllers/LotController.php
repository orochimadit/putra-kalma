<?php

namespace App\Http\Controllers;

use App\Models\Lot;
use App\Http\Requests\StoreLotRequest;
use App\Http\Requests\UpdateLotRequest;
use App\Models\Housing;

class LotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lots = Lot::all();
        return view('admin.lot.index',compact('lots'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $housings = Housing::all();
        return view('admin.lot.create',compact('housings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLotRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLotRequest $request)
    {
        Lot::Create([
            'blok'   => $request->blok,
             'surface_area' => $request->surface_area,
             'price'    => $request->price,
             'type' => $request->type,
             'amount' => $request->amount,
             'housing_id' => $request->housing_id
         ]);
         return redirect()->route('lots.index')->with('alert-success', 'Kaveling Berhasil ditambah.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lot  $lot
     * @return \Illuminate\Http\Response
     */
    public function show(Lot $lot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lot  $lot
     * @return \Illuminate\Http\Response
     */
    public function edit(Lot $lot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLotRequest  $request
     * @param  \App\Models\Lot  $lot
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLotRequest $request, Lot $lot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lot  $lot
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lot $lot)
    {
        try {
            $lot->delete();
        } catch (\Throwable $th) {
            return back()->with('alert-danger',$th->getMessage());
        }
        return redirect()->route('lots.index')->with('alert-success', 'Data Berhasil berhasil dihapus');
    }
}
