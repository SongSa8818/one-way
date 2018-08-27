<?php

namespace App\Http\Controllers;

use App\City;
use App\Khan;
use App\Property;
use App\PropertyTypes;
use App\Active;
use App\Sangkat;
use App\Village;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.property');
    }

    public function list()
    {
      $properties = Property::paginate(10);
      return view('admin.properties.list')->with('properties', $properties);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $city = City::pluck('name', 'id');
      $khan = Khan::pluck('name', 'id');
      $sangkat = Sangkat::pluck('name', 'id');
      $village = Village::pluck('name', 'id');
      $propertyTypes = PropertyTypes::getKeys();
      return view('admin.properties.form')->with(array('propertyTypes'=>$propertyTypes, 'cities'=>$city, 'khans'=>$khan, 'sangkats'=>$sangkat, 'villages'=>$village));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $property = new Property();
        $property->title = $request->title;
        $property->price = $request->price;
        $property->description = $request->description;
        $property->video_url = $request->video_url;
        $property->type = $request->type;
        $property->property_number = $request->property_number;
        $property->city_id = $request->city_id;
        $property->khan_id = $request->khan_id;
        $property->sangkat_id = $request->sangkat_id;
        $property->village_id = $request->village_id;
        $property->street_name = $request->street_name;
        $property->street_number = $request->street_number;
        $property->status = $request->status;
        $property->user_id = Auth::user()->getAuthIdentifier();
        $property->save();
        return redirect(route('property.list'));
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
