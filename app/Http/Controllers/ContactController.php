<?php

namespace App\Http\Controllers;

use App\Contact_info;

use App\ContactInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
     public function index()
    {
        $contact_info = ContactInfo::findOrFail(1);
        return view('pages.contact')->with('contact_info', $contact_info);
    }

    public function create()
    {
        return view('admin.contacts.create');
    }

    public function store(Request $request)
    {
        $contact_info = new ContactInfo();
        $contact_info->address = $request->address;
        $contact_info->email = $request->email;
        $contact_info->phone_number = $request->phone_number;
        $contact_info->website = $request->website;
        $contact_info->save();
        Session::flash('alert-success', 'Successfully saved');
        return redirect(route('contact.edit', $contact_info->id));

    }

    public function edit($id)
    {
        if (!ContactInfo::all()->isEmpty()) {
            $contact_info = ContactInfo::findOrFail($id);
            return view('admin.contacts.create')->with(array('contact_info' => $contact_info));
        } else {
            return redirect(route('contact.create'));
        }
    }

    public function update(Request $request, $id)
    {
        $contact_info = ContactInfo::findOrFail($id);
        $contact_info->address = $request->address;
        $contact_info->email = $request->email;
        $contact_info->phone_number = $request->phone_number;
        $contact_info->website = $request->website;
        $contact_info->save();
        Session::flash('alert-success', 'Successfully saved');
        return redirect(route('contact.edit', $contact_info->id));
    }
}
