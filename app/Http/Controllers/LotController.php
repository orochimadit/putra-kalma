<?php

namespace App\Http\Controllers;

use App\Models\Lot;
use App\Http\Requests\StoreLotRequest;
use App\Http\Requests\UpdateLotRequest;

class LotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLotRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLotRequest $request)
    {
        //
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
        //
    }
}
