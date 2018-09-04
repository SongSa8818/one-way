<?php

namespace App\Http\Controllers;

use App\ContactInfo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

      $contact_info = ContactInfo::findOrFail(1);
      return view('pages.home')->with('contact_info', $contact_info);

    }
}
