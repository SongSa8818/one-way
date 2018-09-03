<?php

namespace App\Http\Controllers;

use App\Contact_info;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    //
     public function index()
    {
        $contact_info = Contact_info::findOrFail(1);
        //dd($contact_info);
        return view('pages.contact')->with('contact_info', $contact_info);
    }

    public function create()
    {

        return view('admin.contacts.create');

    }
    public function store(Request $request)
    {
        $contact_info = new Contact_info();
        $contact_info->address = $request->address;
        $contact_info->email = $request->email;
        $contact_info->phone_number = $request->phone_number;
        $contact_info->website = $request->website;
        $contact_info->save();
        Session::flash('alert-success', 'Successfully saved');
        return redirect(route('contact.create', $contact_info->id));

    }
    public function show()
    {
        //
    }
    public function edit($id)
    {
        if (!Contact_info::all()->isEmpty()) {
            $contact_info = Contact_info::findOrFail($id);
            return view('admin.contacts.create')->with(array('contact_info' => $contact_info));
        } else {
            return redirect(route('contact.create'));
        }
    }
    public function update(Request $request, $id)
    {
        $contact_info = Contact_info::findOrFail($id);
        $contact_info->address = $request->address;
        $contact_info->email = $request->email;
        $contact_info->phone_number = $request->phone_number;
        $contact_info->website = $request->website;
        $contact_info->save();
        Session::flash('alert-success', 'Successfully saved');
        return redirect(route('contact.edit', $contact_info->id));
    }
    public function destroy($id)
    {
        Contact_info::destroy($id);
        return redirect('contact_info');
    }
}
