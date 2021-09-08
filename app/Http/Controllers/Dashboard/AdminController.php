<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin()
    {
        return view('dashboards.admin');
    }


    public function profile()
    {
        return view('dashboards.profile');
    }

    public function store( Request $request)
    {
        $request->validate([
            'avatar' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
           ]);

           $imageName = time().'.'.$request->avatar->extension();  
     
           $request->avatar->move(public_path('avatar'), $imageName);
     
           /* Store $imageName name in DATABASE from HERE */
       
           return back()
               ->with('success','You have successfully upload image.')
               ->with('image',$imageName); 
    }

   
}