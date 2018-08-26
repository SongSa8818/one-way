<?php

namespace App\Http\Controllers;

use App\Sangkat;
use App\Village;
use Illuminate\Http\Request;

class VillageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $village = village::Villagesangkat();
      return view('admin.parameters.village')->with('villages', $village);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $sangkat = Sangkat::pluck('name', 'id');
      return view('admin.parameters.formVillage')->with('sangkats', $sangkat);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $village = new Village();
      $village->name = $request->name;
      $village->sangkat_id = $request->sangkat_id;
      $village->save();
      return redirect('village');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Village  $village
     * @return \Illuminate\Http\Response
     */
    public function show(Village $village)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Village  $village
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $village = Village::findOrFail($id);
      $sangkat = Sangkat::pluck('name', 'id');
      return view('admin.parameters.formVillage')->with(array('village' => $village, 'sangkats' => $sangkat));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Village  $village
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $village = Village::findOrFail($id);
      $village->name = $request->name;
      $village->sangkat_id = $request->sangkat_id;
      $village->save();
      return redirect('village');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Village  $village
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Village::destroy($id);
      return redirect('village');
    }
}
