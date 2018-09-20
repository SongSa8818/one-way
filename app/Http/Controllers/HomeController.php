<?php

namespace App\Http\Controllers;

use App\ContactInfo;
use App\RequestInfo;
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

        $image = array();
        $latestProperties = Property::Latest();
        foreach ($latestProperties as $property) {
            $image = ImageProperty::FindOneByPropertyId($property->id);
        }
        $slideshow = SlideshowImage::paginate(10);
        $request_info = RequestInfo::paginate(10);
        $agencies = User::GetUserByRole(Role::AGENCY);
        return view('pages.home')->with(
            [
                'latestProperties' => $latestProperties,
                'image' => $image,
                'agencies' => $agencies,
                'slideshows' => $slideshow,
                'request_infos' => $request_info
            ]);

    }
}
