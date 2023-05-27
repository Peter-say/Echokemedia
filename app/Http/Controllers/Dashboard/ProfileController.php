<?php

namespace App\Http\Controllers\Dashboard;

use App\Helpers\MediaFilesHelper;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('dashboards.profile.index', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            "avatar" => "nullable|image",
            "name" => "required|string",
            "email" => "required|email",
            "linkedin_username" => "nullable|string",
            "facebook_username" => "nullable|string",
            "twitter_username" => "nullable|string",
            "instagram_username" => "nullable|string",

        ]);

        $user = Auth()->user();
        $existing_picture_path = $user->avatar;
        if (!empty('avatar')) {
            $picture_path = $existing_picture_path;
        }
        if ($request->hasFile('avatar')) {
            $picture_path = MediaFilesHelper::saveFromRequest($request->avatar, 'ProfilePictures', $request);
        }

        $data =  User::findOrFail($id);
        $data['avatar'] = $picture_path;
        $user = [
            'picture' => $picture_path,
            'name' =>  $request->name,
            'email' =>  $request->email,
            'linkedin_username' =>  $request->linkedin_username,
            'facebook_username' =>  $request->facebook_username,
            'twitter_username' =>  $request->twitter_username,
            'instagram_username' =>  $request->github_username,
        ];

        $data->update($user);
        return back()->with('success_message', 'Profile Updated successfully');
    }
}
