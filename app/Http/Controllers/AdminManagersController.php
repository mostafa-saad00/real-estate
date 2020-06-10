<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminManagersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $users = User::paginate(10);
        return view('admin.manager.list_managers', compact('users'));
    }


    public function create()
    {
        return view('admin.manager.add_manager');
    }


    public function destroy(User $user)
    {
        $user->delete();
        return back();
    }
}
