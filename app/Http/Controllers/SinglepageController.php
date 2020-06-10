<?php

namespace App\Http\Controllers;

use App\AboutInfo;
use App\HomeInfo;
use Illuminate\Http\Request;

class SinglepageController extends Controller
{
    public function about_us()
    {
    	$about_info = AboutInfo::findOrFail(1);
    	$home_info = HomeInfo::findOrFail(1);
        return view('single_pages.about-us', compact('about_info', 'home_info'));
    }

    public function faq()
    {
    	
        return view('single_pages.faq');
    }

}
