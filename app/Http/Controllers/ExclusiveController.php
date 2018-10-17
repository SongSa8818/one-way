<?php

namespace App\Http\Controllers;

use App\City;
use App\ImageProperty;
use App\Property;
use App\PropertyTypes;
use App\Status;
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
        $types = PropertyTypes::getKeys();
        $status = Status::getKeys();
        $cities = City::pluck('name', 'id');
        return view('pages.exclusive')->with(
            [
                'properties' => $exclusives,
                'types' => $types,
                'status' => $status,
                'cities' => $cities,
            ]);
    }

    public function search(Request $request)
    {
        $results = Property::Search($request->all());
        $types = PropertyTypes::getKeys();
        $status = Status::getKeys();
        $cities = City::pluck('name', 'id');
        return view('pages.exclusive')->with(
            [
                'results' => $results,
                'types' => $types,
                'status' => $status,
                'cities' => $cities,
            ]);
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
