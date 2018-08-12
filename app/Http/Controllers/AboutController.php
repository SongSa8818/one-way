<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //

    protected function index() {
    	return view('pages.about');
    }
}
