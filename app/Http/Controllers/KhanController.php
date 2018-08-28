<?php

namespace App\Http\Controllers;

use App\City;
use App\Khan;
use Illuminate\Http\Request;

class KhanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $khan = Khan::KhansByCity();
      return view('admin.parameters.khan')->with('khans', $khan);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $city = City::pluck('name', 'id');
      return view('admin.parameters.formKhan')->with('cities', $city);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $khan = new Khan();
      $khan->name = $request->name;
      $khan->city_id = $request->city_id;
      $khan->save();
      return redirect('khan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Khan  $khan
     * @return \Illuminate\Http\Response
     */
    public function show(Khan $khan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Khan  $khan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $khan = Khan::findOrFail($id);
      $city = City::pluck('name', 'id');
      return view('admin.parameters.formKhan')->with(array('khan' => $khan, 'cities' => $city));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Khan  $khan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $khan = Khan::findOrFail($id);
      $khan->name = $request->name;
      $khan->city_id = $request->city_id;
      $khan->save();
      return redirect('khan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Khan  $khan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Khan::destroy($id);
      return redirect('khan');
    }
}
