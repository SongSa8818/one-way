<?php

namespace App\Http\Controllers;

use App\SlideshowImage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $slideshow = SlideshowImage::paginate(10);
       // dd($slideshow);
        return view('pages.home')->with('slideshows', $slideshow);

    }
}
