<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin()
    {
        $profiles = Profile::get();
        return view('dashboards.admin' , [
            'profiles' => $profiles
        ]);
        
    }


    public function profile()
    {
        return view('dashboards.profile');
    }

    public function store(Request $request , User $user)
    {
      
    }
}
