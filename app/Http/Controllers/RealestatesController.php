<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Realestate;
use App\Image;
use DB;

class RealestatesController extends Controller
{
    public function index()	
    {
    	return view('add.add_realestate');
    }

    public function store(Request $request)
    {   

     $this->validate($request, [
         'property_id' => 'required|unique:realestates',
         'city' => 'required',
         'area' => 'required',
         'buyorrent' => 'required',
         'type' => 'required',
         'bedrooms' => 'required',
         'bathrooms' => 'required',
         'parking' => 'required',
         'price' => 'required',
         'total_area' => 'required',
         'ar_desc' => 'required',
         'en_desc' => 'required',
         'ar_title' => 'required',
         'en_title' => 'required',
         'files' => 'required|min:2',
     ],
     [
         'files.min' => "The files must be an Images and at least 2"
     ]);


         
     $realestate = new Realestate;

     $realestate->property_id = $request->property_id;
     $realestate->city = $request->city;
     $realestate->area = $request->area;
     $realestate->buyorrent = $request->buyorrent;
     $realestate->type = $request->type;
     $realestate->bedrooms = $request->bedrooms;
     $realestate->bathrooms = $request->bathrooms;
     $realestate->parking = $request->parking;
     $realestate->price = $request->price;
     $realestate->total_area = $request->total_area;
     $realestate->ar_desc = $request->ar_desc;
     $realestate->en_desc = $request->en_desc;
     $realestate->ar_title = $request->ar_title;
     $realestate->en_title = $request->en_title;

     $realestate->save();


     $fornumber =count($request->file('files'));
     $realestate_id = DB::table('realestates')->where('property_id', $request->property_id)->value('id');

     for ($i=0; $i < $fornumber ; $i++) { 
         
         $request->file('files')[$i]
             ->storeAs('public', ($request->property_id . '_' . $request->file('files')[$i]
             ->getClientOriginalName()));

         $image = new Image;
         $image->realestate_id = $realestate_id;
         $image->image_name = $request->property_id . '_' . $request->file('files')[$i]
                                 ->getClientOriginalName();

         $image->save();

     }


      
    } 




}
