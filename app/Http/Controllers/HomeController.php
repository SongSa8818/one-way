<?php

namespace App\Http\Controllers;

use App\City;
use App\ContactInfo;
use App\PropertyTypes;
use App\SlideshowImage;
use App\ImageProperty;
use App\Property;
use App\Role;
use App\Status;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $image = array();
        $latestProperties = Property::Latest();
        foreach ($latestProperties as $property) {
            $image = ImageProperty::FindOneByPropertyId($property->id);
        }

        $slideshow = SlideshowImage::paginate(10);
        $agencies = User::GetUserByRole(Role::AGENCY);
        $types = PropertyTypes::getKeys();
        $status = Status::getKeys();
        $cities = City::pluck('name', 'id');
        return view('pages.home')->with(
            [
                'latestProperties' => $latestProperties,
                'image' => $image,
                'agencies' => $agencies,
                'slideshows' => $slideshow,
                'types' => $types,
                'status' => $status,
                'cities' => $cities
            ]);

    }
}
