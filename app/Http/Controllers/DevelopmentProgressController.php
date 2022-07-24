<?php

namespace App\Http\Controllers;

use App\Models\DevelopmentProgress;
use App\Http\Requests\StoreDevelopmentProgressRequest;
use App\Http\Requests\UpdateDevelopmentProgressRequest;

class DevelopmentProgressController extends Controller
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
     * @param  \App\Http\Requests\StoreDevelopmentProgressRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDevelopmentProgressRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DevelopmentProgress  $developmentProgress
     * @return \Illuminate\Http\Response
     */
    public function show(DevelopmentProgress $developmentProgress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DevelopmentProgress  $developmentProgress
     * @return \Illuminate\Http\Response
     */
    public function edit(DevelopmentProgress $developmentProgress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDevelopmentProgressRequest  $request
     * @param  \App\Models\DevelopmentProgress  $developmentProgress
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDevelopmentProgressRequest $request, DevelopmentProgress $developmentProgress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DevelopmentProgress  $developmentProgress
     * @return \Illuminate\Http\Response
     */
    public function destroy(DevelopmentProgress $developmentProgress)
    {
        //
    }
}
