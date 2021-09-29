<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;



class ProfileController extends Controller
{
    public function index()
    {
        return view('users.profile.index');
    }

    public function edit(User $user)
    {
        $user = auth()->user();
        return view('users.profile.edit', ["user" => $user]);
    }


    public function update(Request $request)
    {

        $user = auth()->user();
        $data = $request->validate([
            "name" => "required|string",
            "email" => "required|email|unique:users,email,$user->id",
            "avatar" => "nullable|image"

        ]);

    return back()
    ->with('success_message' , 'Profile updated successfully');
    }
}
