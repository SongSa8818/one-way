<?php

namespace App\Http\Controllers;

use App\ContactInfo;
use App\ImageProperty;
use App\Property;
use App\SlideshowImage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $slideshow = SlideshowImage::paginate(10);
        return view('pages.home')->with('slideshows', $slideshow);

        $image = array();
        $latestProperties = Property::Latest();
        foreach ($latestProperties as $property) {
            $image = ImageProperty::FindOneByPropertyId($property->id);
        }
        return view('pages.home')->with(['latestProperties' => $latestProperties, 'image' => $image]);

    }
}
