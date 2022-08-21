<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $users = User::role('Admin')->get();
        return view('admin.staff.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user=  User::Create([
            'name'   => $request->name,
            'email' => $request->email,
            'password'    => Hash::make($request->password),
            'address' => $request->address,
            'phone_number' => $request->phone_number,
        ]);
        $user->assignRole('Admin');
        return redirect()->route('staff.index')->with('alert-success', 'Staff Berhasil ditambah.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $staff)
    {
        // $staff = User::find($id);
        return view('admin.staff.edit',compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,User $staff)
    {
        $staff->update([
            'name'      => $request->name,
            'email'     => $request->email,
            'phone_number' => $request->phone_number,
            'address'       => $request->address
        ]);
        return redirect()->route('staff.index')->with('alert-success', 'Staff berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $staff)
    {
        try {
            // $staff = User::find($id);
            $staff->delete();
        } catch (\Throwable $th) {
            return back()->with('alert-danger',$th->getMessage());
        }
        return redirect()->route('staff.index')->with('alert-success', 'Data Berhasil berhasil dihapus');
    }
}
