<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePropertyRequest;
use App\Image;
use App\Property;
use DB;
use Illuminate\Http\Request;

class AdminPropertiesController extends Controller
{
    

    public function __construct()
    {
        $this->middleware('auth');
    }


    
    public function index()
    {
        $properties = Property::paginate(7);
        return view('admin.property.list_property', compact('properties'));
    }
    
    public function create()
    {
        return view('admin.property.add_property');
    }

    public function store(StorePropertyRequest $request)
    {

        $property = Property::create($request->except(['files']));

        Image::save_multi_images($request);

        return redirect('/main-image/' . $property->id);
    }


    public function edit(Property $property)
    {
        return view('admin.property.edit_property', compact('property'));
    }

    public function update(Request $request, Property $property)
    {
        $property->update($request->except(['files']));

        if ($request->has('files'))
        {
            foreach ($property->images as $image)
            {
                $image->delete();
            }
            $image = new Image;

            $image->save_multi_images($request);

            return redirect('/main-image/' . $property->id);
        }
        return redirect('/properties-list');


       
    }
    public function destroy(Property $property)
    {
        foreach ($property->images as $image)
        {
            $image->delete();
        }
        $property->delete();
        
        return back();
    }
}
