<?php

namespace App\Http\Controllers;

use App\Models\Kpr;
use App\Http\Requests\StoreKprRequest;
use App\Http\Requests\UpdateKprRequest;

class KprController extends Controller
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
     * @param  \App\Http\Requests\StoreKprRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKprRequest $request)
    {
        //
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
        //
    }
}
