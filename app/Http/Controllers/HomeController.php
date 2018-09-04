<?php

namespace App\Http\Controllers;

use App\Contact_info;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

      $contact_info = Contact_info::findOrFail(1);
      return view('pages.home')->with('contact_info', $contact_info);

    }
}
