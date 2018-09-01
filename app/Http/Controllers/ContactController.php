<?php

namespace App\Http\Controllers;

use App\Contact;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    //
     public function index()
    {
        return view('pages.contact');
       // $contact = Contact::Contact();
        //return view('pages.contact')->with('contact', $contact);
    }
    public function list()
    {
        //return view('admin.contact.create');
        $contacts = Contact::List();
        return view('admin.contacts.list')->with('contacts', $contacts);
    }

    public function create()
    {
        //
        return view('admin.contacts.create');

    }
    public function store(Request $request)
    {
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        //dd($contact);
        $contact->save();
        return redirect(route('contact.list', $contact->id));
    }
    public function show()
    {
        //
        //return view('admin.contact.show');

    }
    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('admin.contact.list')->with(array('contact' => $contact));
    }
    public function update(Request $request, $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        return redirect('contact');
    }
    public function destroy($id)
    {
        About::destroy($id);
        return redirect('contact');
    }
}
