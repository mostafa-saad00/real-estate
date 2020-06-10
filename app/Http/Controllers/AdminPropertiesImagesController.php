<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;

class AdminPropertiesImagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function create($property_id)
    {
    	$related_images = Image::where('property_id', $property_id)->get();

    	if (count($related_images) == 0)
    	{
    		return view('errors.404');
    	}
    	return view('admin.images.select_main_image', compact('related_images', 'property_id'));    
    }

    public function store(Request $request, $property_id)
    {
    	if ($request->has('image_id'))
    	{
    		//check if the is an old value for first image to change it to 0 then we will update selected image to 1
    		$checkFirstImage = Image::where('property_id', $property_id)->where('first_image', 1)->first();
    		if (!$checkFirstImage == '')
    		{
    			$checkFirstImage->first_image = 0;
    			$checkFirstImage->save();
    		}
    		
    		$image = Image::where('id', $request->image_id)
    					 ->update(['first_image' => 1]);
    		return redirect('/properties-list');		 
    	}
    	return back()->with('status', 'No photo selected!');
    	
    }
}
