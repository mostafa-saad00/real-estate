<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use DB;

class UsersController extends Controller
{
    public function index()
    {
    	return User::latest()->paginate(5);
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
    		'name' => 'required',
    		'email' => 'required',
    		'password' => 'required',
    		'roles' => 'required',
    	]);

    	$user = new User;
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->roles = $request->roles;
    	$user->password = Hash::make($request->password) ;
    	$user->save();
    	
    }

    public function update(Request $request, $id )
    {
    	$user = User::findOrFail($id);
    	DB::table('users')
    	            ->where('id', $id)
    	            ->update(['name' => $request->name,
    	        			  'email' => $request->email,
    	        			  'roles' => $request->roles,
    	        			  'password' => $request->password]);
    	

    	
    } 

    public function destroy($id)
    {
    	$user = User::findOrFail($id);

    	$user->delete();

    	
    }

}
