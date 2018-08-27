<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function index()
    {
      return view('pages.about');
    }
    public function list()
    {
      return view('admin.about.list');

    }
    public function create()
    {
        //
        return view('admin.about.create');
    }


    public function store(Request $request)
    {
        //
        $show = new Show();
        $show->creare($request->all());
    }

    public function show($id)
    {
        //
        return view('admin.about.show');
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
