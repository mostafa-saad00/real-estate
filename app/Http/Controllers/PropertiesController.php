<?php

namespace App\Http\Controllers;

use App\Property;
use App\Realestate;
use App\Tour;
use Illuminate\Http\Request;

class PropertiesController extends Controller
{
    public function index()
    {
        $properties = Property::paginate(7);
        return view('property.properties',compact('properties'));
    }


    public function show(Property $property)
    {
        return view('property.single_property',compact('property'));
    }
    
    public function search(Request $request)
    {
        // return $request->all();
        $properties = Property::getProperties($request);

        return view('property.properties',compact('properties'));
    }

    public function add_tour(Request $request, Property $realestate)
    {

    	$this->validate($request, [
    		'tour_date' => 'required',
    		'tour_time' => 'required|regex:/(\d+\:\d+)/',
    		'name' => 'required',
    		'phone' => 'required|numeric',
    		'email' => 'required|E-Mail',
    		'message' => 'required',
    	]);

    	$tour = new Tour;

    	$tour->realestate_id = $realestate->id;
    	$tour->tour_date = $request->tour_date;
    	$tour->tour_time = $request->tour_time;
    	$tour->name = $request->name;
    	$tour->phone = $request->phone;
    	$tour->email = $request->email;
    	$tour->message = $request->message;

    	$tour->save();
    	
    	return back()->with('success', 'You succefuly schedule your tour');
    }
     
}
