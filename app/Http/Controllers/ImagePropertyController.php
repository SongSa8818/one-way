<?php

namespace App\Http\Controllers;

use App\ImageProperty;
use App\Property;
use Faker\Provider\Image;
use Illuminate\Http\Request;

class ImagePropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.properties.formImage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $file = $request->file('image');
      if(in_array($file->getClientMimeType(), array('image/jpeg','image/jpg','image/png'))){
        $imageName = 'PP-'.$request->proid . '-' . time() . '.' . $file->getClientOriginalExtension();

        $image = new ImageProperty();
        $image->img = $imageName;
        $image->property_id = $request->proid;
        if($image->save()) {
          $file->move(public_path('/uploads'), $imageName);
        }

        return redirect(route('image.edit', $request->proid));
      } else {
        return redirect(route('image.edit', $request->proid));
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ImageProperty  $image
     * @return \Illuminate\Http\Response
     */
    public function show(ImageProperty $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ImageProperty  $image
     * @return \Illuminate\Http\Response
     */
    public function edit($property_id)
    {
      $property = Property::findOrFail($property_id);
      $images = ImageProperty::List($property_id);
      return view('admin.properties.image')->with(array('images' => $images, 'property' => $property));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ImageProperty  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ImageProperty $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ImageProperty  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(ImageProperty $image)
    {
        //
    }
}
