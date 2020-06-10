<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Realestate;

class AdminController extends Controller
{
	public function __construct()
	{
	    $this->middleware('auth');
	}

    public function index()
    {
    	return view('admin.main');
    }

    public function add_property()
    {
    	return view('admin.add-property');
    }



    public function index_properties()
    {
        $realestates = Realestate::all();
        return view('admin.properties');
    }

    
}
