<?php

namespace App\Http\Controllers;

use App\AboutInfo;
use App\ContactInfo;
use App\HomeInfo;
use Illuminate\Http\Request;

class AdminSinglepageController extends Controller
{
	public function __construct()
	{
	    $this->middleware('auth');
	}


    public function home()
    {
    	$home_info = HomeInfo::findOrFail(1);
    	return view('admin.edit_pages.home', compact('home_info'));
    }

    public function update_home(Request $request)
    {
    	$home_info = HomeInfo::where('id', 1)->update($request->except(['_token', '_method']));
		return back();
    }

    public function contact_info()
    {
    	$contact_info = ContactInfo::findOrFail(1);
    	return view('admin.edit_pages.contact_info', compact('contact_info'));
    }

    public function update_contact_info(Request $request)
    {
    	$contact_info = ContactInfo::where('id', 1)->update($request->except(['_token', '_method']));
    	return back();
    }	

    public function about_us()
    {
    	$about_info = AboutInfo::findOrFail(1);
    	return view('admin.edit_pages.about_us', compact('about_info'));
    }

    public function update_about_us(Request $request)
    {
    	$about_info = AboutInfo::where('id', 1)->update($request->except(['_token', '_method']));
    	return back();
    }

    public function faq()
    {
    	return view('admin.edit_pages.faq');
    }
}
