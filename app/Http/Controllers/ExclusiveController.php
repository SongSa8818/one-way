<?php

namespace App\Http\Controllers;

use App\ImageProperty;
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
        $exclusives = Property::SelectPropertyExclusive();
        return view('pages.exclusive')->with('properties', $exclusives);
    }

    public function search(Request $request)
    {
        $results = Property::Search($request->all());
        return view('pages.exclusive')->with('results', $results);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }
}
