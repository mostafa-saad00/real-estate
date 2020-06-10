<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Realestate;
use App\Http\Resources\Property as PropertyResource;

class ApiController extends Controller
{
    public function index()
    {
    	$properties = Realestate::all();
    	return PropertyResource::collection($properties);
    }
}
