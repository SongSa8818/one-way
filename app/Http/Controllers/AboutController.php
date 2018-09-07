<?php

namespace App\Http\Controllers;

use App\About;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AboutController extends Controller
{

    public function index()
    {
        $about = About::findOrFail(1);
        return view('pages.about')->with('about', $about);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $about = new About();
        $about->company_slogan = $request->company_slogan;
        $about->description = $request->description;
        $about->save();
        Session::flash('alert-success', 'Successfully saved');
        return redirect(route('about.edit', $about->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        return view('admin.about.show');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!About::all()->isEmpty()) {
          $about = About::findOrFail($id);
          return view('admin.about.create')->with(array('about' => $about));
        } else {
          return redirect(route('about.create'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $about = About::findOrFail($id);
        $about->company_slogan = $request->company_slogan;
        $about->description = $request->description;
        $about->save();
        Session::flash('alert-success', 'Successfully updated');
        return redirect(route('about.edit', $about->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        About::destroy($id);
        return redirect('about');
    }
}
