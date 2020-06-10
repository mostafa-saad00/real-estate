<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\test;
use App\Http\Resources\Test as TestResource;

class TestsController extends Controller
{
    public function index()
    {
    	return view('welcome');
    }

    public function store(Request $request)
    {
    	$test = new test;
    	$test->test1 = $request->test1;
    	$test->test2 = $request->test2;
    	$test->save();
    }

    public function testindex()
    {
    	$tests = test::all();
    	return TestResource::collection($tests);
    }

    public function teststore(Request $request)
    {
    	$test = new test;
    	$test->test1 = $request->test1;
    	$test->test2 = $request->test2;
    	$test->save();

    	
    }

}
