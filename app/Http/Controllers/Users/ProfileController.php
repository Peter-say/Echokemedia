<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;



class ProfileController extends Controller
{
    public function index()
    {
        
        $profile = Profile::find(1);
        return view('users.profile.index' , compact('profile'));
    }

    public function edit(User $user)
    {
        $user = auth()->user();
        return view('users.profile.edit', ["user" => $user]);
    }

    public function update(Request $request , User $user)
    {
// 
        // dd($request->all());

        $user = auth()->user();
        $data = $request->validate([
            "name" => "required|string",
            "email" => "required|email|unique:users,email,$user->id",
            "linkedin_username" => "nullable|string",
            "facebook_username" => "nullable|string",
            "twitter_username" => "nullable|string",
            "github_username" => "nullable|string",
            "avatar" => "nullable|image"

        ]);

       

        $request = Profile::create([
            'name' =>  $request->input('name'),
            'email' =>  $request->input('email'),
            'linkedin_username' =>  $request->input('linkedin_username'),
            'facebook-username' =>  $request->input('facebook-username'),
            'twitter-username' =>  $request->input('twitter-username'),
            'github-username' =>  $request->input('github-username'),
            'user_id' => auth()->user()->id,
        ]);

        }
    
}
