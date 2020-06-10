<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Property extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);

        return [
            'id' => $this->id,
            'property_id' => $this->property_id,
            'city' => $this->city,
            'area' => $this->area,
            'buyorrent' => $this->buyorrent,
            'type' => $this->type,
            'bedrooms' => $this->bedrooms,
            'bathrooms' => $this->bathrooms,
            'parking' => $this->parking,
            'price' => $this->price,
            'total_area' => $this->total_area,
            'ar_desc' => $this->ar_desc,
            'en_desc' => $this->en_desc,
            'ar_title' => $this->ar_title,
            'en_title' => $this->en_title,
        ];
    }
}
