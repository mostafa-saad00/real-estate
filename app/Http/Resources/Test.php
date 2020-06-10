<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Test extends Resource
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
            'test1' => $this->test1,
            'test2' => $this->test2,
        ];
    }
}
