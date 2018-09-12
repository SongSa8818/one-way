<?php

namespace App\Http\Controllers;

use App\ContactInfo;
use App\SlideshowImage;
use App\ImageProperty;
use App\Property;
use App\Role;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        /*sorry b please help me i already try my best
         * please b update it for me pg i really don't know how to do this one
         * sorry that i always disturb you
         */
        $slideshow = SlideshowImage::paginate(10);
        return view('pages.home')->with('slideshows', $slideshow);

        $image = array();
        $latestProperties = Property::Latest();
        foreach ($latestProperties as $property) {
            $image = ImageProperty::FindOneByPropertyId($property->id);
        }

        $agencies = User::GetUserByRole(Role::AGENCY);
        return view('pages.home')->with(
            [
                'latestProperties' => $latestProperties,
                'image' => $image,
                'agencies' => $agencies
            ]);

    }
}
