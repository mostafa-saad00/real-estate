<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Image extends Model
{	

    public static function save_multi_images($requestData)
    {
    	$countOfImages =count($requestData->file('files'));
    	$property_id = DB::table('properties')->where('property_id', $requestData->property_id)->value('id');

    	for ($i=0; $i < $countOfImages ; $i++) { 
    	    
    	    $image = $requestData->file('files')[$i];
    	    $image_name = time() . '.' . $image->getClientOriginalName();
    	    $image->move(public_path('/properties_images'), $image_name);
    	    
    	    $new_image = new Image;
    	    $new_image->property_id = $property_id;
    	    $new_image->image_name = $image_name;

    	    $new_image->save();
        }

    }

}
