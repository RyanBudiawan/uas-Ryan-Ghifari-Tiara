<?php

namespace App\Http\Controllers;

use App\Polyclinic;
use Illuminate\Http\Request;

class PolyclinicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $polyclinics = Polyclinic::all();
        return view('polyclinic.index', compact('polyclinics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('polyclinic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
  
        Polyclinic::create($request->all());
   
        return redirect()->route('polyclinic.index')
                        ->with('success','polcylinic created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Polyclinic  $polyclinic
     * @return \Illuminate\Http\Response
     */
    public function show(Polyclinic $polyclinic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Polyclinic  $polyclinic
     * @return \Illuminate\Http\Response
     */
    public function edit(Polyclinic $polyclinic)
    {
        return view('polyclinic.edit', compact('polyclinic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Polyclinic  $polyclinic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Polyclinic $polyclinic)
    {
        $request->validate([
            'name' => 'required',
        ]);
  
        $polyclinic->update($request->all());
  
        return redirect()->route('polyclinic.index')
                        ->with('success','polyclinic updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Polyclinic  $polyclinic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Polyclinic $polyclinic)
    {
        $polyclinic->delete();
  
        return redirect()->route('polyclinic.index')
                        ->with('success','polyclinic deleted successfully');
    }
}