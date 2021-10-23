<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class UserPostController extends Controller
{
    public function index(User $user , Post $post)
    {
        $post = $user->posts()->with('user')->paginate(10);
       return view('web.singleUser', [
           'user' => $user,
           'post' => $post,
       ]);
    }
}
