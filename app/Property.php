<?php

namespace App;

use App\Image;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
	protected $guarded = [];

	public static function getProperties($data)
	{
		return Property::where('area', 'like', '%' . $data->get('location') . '%')
                                ->where('buyorrent', 'like', '%' . $data->get('buyorrent') . '%')
                                ->where('type', 'like', '%' . $data->get('type') . '%')
                                ->where('bedrooms', $data->get('bedrooms'))
                                ->where('bathrooms', $data->get('bathrooms'))
                                ->where('price', '<=' , $data->get('price'))
                                ->paginate(7);
	}


    public function images()
    {
    	return $this->hasMany(Image::class);
    }

    public function tours()
    {
    	return $this->hasMany(Tour::class);
    }

    

}
