<?php

namespace App\Http\Controllers;

use App\Contact;
use App\ContactInfo;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
    	$contact_info = ContactInfo::findOrFail(1);
        return view('contact_us.contact-us', compact('contact_info'));
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
    		'name' => 'required',
    		'number' => 'required|numeric',
    		'email' => 'required',
    		'message' => 'required',
    	]);

    	$contact = new Contact;

    	$contact->name = $request->name;	
    	$contact->number = $request->number;	
    	$contact->email = $request->email;	
    	$contact->message = $request->message;	

    	$contact->save();

        return back()->with('success', 'You succefuly send a message');
    }
}
