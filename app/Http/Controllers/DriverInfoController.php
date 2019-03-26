<?php

namespace App\Http\Controllers;

use App\DriverInfo;
use Illuminate\Http\Request;

class DriverInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $drivers = DriverInfo::all();
        return view('drivers.index', ['drivers'=>$drivers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('auth.register');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),[
            'dob' => 'required|date',
            'licenceNumber' => 'required',
            'province' => 'required',
            'expiryDate' => 'required|date',
        ]);

        $drivers = DriverInfo ::create(request(['dob', 'licenceNumber','province', 'expiryDate']));

        // return redirect()->to('');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DriverInfo  $driverInfo
     * @return \Illuminate\Http\Response
     */
    public function show(DriverInfo $driverInfo)
    {
        //
        return view('drivers.show', ['driverInfo' => DriverInfo::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DriverInfo  $driverInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(DriverInfo $driverInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DriverInfo  $driverInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DriverInfo $driverInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DriverInfo  $driverInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(DriverInfo $driverInfo)
    {
        //
    }
}
