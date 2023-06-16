<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\ContactUs as ModelsContactUs;
use App\Models\Post;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['dashboard', 'Moderator']);
    }
    public function home()
    {
        $profiles = Profile::get();
        return view('dashboards.home' , [
            'profiles' => $profiles
        ]);
        
    }


    public function create()
    {
        return view('dashboards.');
    }

   
    public function usersMessages(ModelsContactUs $contact)
    {
        $contact = ModelsContactUs::latest()->get();
        return view('dashboards.messages' , [
            'contact'=> $contact,
        ]);
    }

   
}


