<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Post;
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


    public function create()
    {
        return view('dashboards.');
    }

    public function store(Request $request , User $user)
    {
      
    }

    public function postlist()
    {
        $posts = Post::whereHas("user")->get();
        return view('dashboards.post-list' ,[
            'posts' => $posts
        ]);
    }
}
