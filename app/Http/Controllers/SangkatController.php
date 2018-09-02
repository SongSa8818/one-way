<?php

namespace App\Http\Controllers;

use App\Khan;
use App\Sangkat;
use Illuminate\Http\Request;

class SangkatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $sangkat = Sangkat::SangkatKhan();
      return view('admin.parameters.sangkat')->with('sangkats', $sangkat);
    }

    public function getSangkats(Request $request){
      return Sangkat::FindSangkatsByKhan($request->khan_id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $khan = Khan::pluck('name', 'id');
      return view('admin.parameters.formSangkat')->with('khans', $khan);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $sangkat = new Sangkat();
      $sangkat->name = $request->name;
      $sangkat->khan_id = $request->khan_id;
      $sangkat->save();
      return redirect('sangkat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sangkat  $sangkat
     * @return \Illuminate\Http\Response
     */
    public function show(Sangkat $sangkat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sangkat  $sangkat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $sangkat = Sangkat::findOrFail($id);
      $khan = Khan::pluck('name', 'id');
      return view('admin.parameters.formSangkat')->with(array('sangkat' => $sangkat, 'khans' => $khan));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sangkat  $sangkat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $sangkat = Sangkat::findOrFail($id);
      $sangkat->name = $request->name;
      $sangkat->khan_id = $request->khan_id;
      $sangkat->save();
      return redirect('sangkat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sangkat  $sangkat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Sangkat::destroy($id);
      return redirect('sangkat');
    }
}
