<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePropertyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'property_id' => 'required|unique:properties',
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
        ];
    }

    public function messages()
    {
        return [
            'files.min' => "The files must be an Images and at least 2",
        ];
    }

}
