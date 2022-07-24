<?php

namespace App\Http\Controllers;

use App\Models\Housing;
use App\Http\Requests\StoreHousingRequest;
use App\Http\Requests\UpdateHousingRequest;

class HousingController extends Controller
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
     * @param  \App\Http\Requests\StoreHousingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHousingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Housing  $housing
     * @return \Illuminate\Http\Response
     */
    public function show(Housing $housing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Housing  $housing
     * @return \Illuminate\Http\Response
     */
    public function edit(Housing $housing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHousingRequest  $request
     * @param  \App\Models\Housing  $housing
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHousingRequest $request, Housing $housing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Housing  $housing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Housing $housing)
    {
        //
    }
}
