<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;

class ExclusiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $properties = Property::paginate(2);
      return view('pages.exclusive')->with('properties', $properties);
    }

    public function search(Request $request) {
        $results = Property::Search($request->all());
        return view('pages.exclusive')->with('results', $results);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }
}
