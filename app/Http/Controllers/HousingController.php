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
        $housings = Housing::all();
        return view('admin.housing.index',compact('housings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.housing.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHousingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHousingRequest $request)
    {
        if($request->file('image')){
            $image_path = $request->file('image')
            ->store('image_housing', 'public');
            $img = $image_path;
            }
            $implode = implode(',', $request->type);
       Housing::Create([
           'name'   => $request->name,
            'image'=>$img,
            'location' => $request->location,
            'type'      => $implode,
            'amount'    => $request->amount,
            'technical_specifications' => $request->technical_specifications,
            'surface_area' => $request->surface_area
        ]);
        $housings =Housing::all();
        return view('admin.housing.index',compact('housings'));
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
       try {
        $housing->delete();
    } catch (\Throwable $th) {
        return back()->with('alert-danger',$th->getMessage());
    }
    return redirect()->route('housings.index')->with('alert-success', 'Data Berhasil berhasil dihapus');

    }
}
