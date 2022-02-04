<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostCategory;
use App\Models\User;
use Illuminate\Http\Request;

class UserPostController extends Controller
{
    public function index(User $user)
    {
        $posts = $user->posts()->with(['user'])->paginate(5);
        return view('web.singleUser', [
            'user' => $user,
            'posts' => $posts,
        ]);
    }

    // public function categorySearchPost(Post $posts)
    // {
        
    //     $posts = Post::all();
    //     // $categories = $posts->category()->with(['posts'])->paginate(20);
    //     $categories = PostCategory::all();
    //     return view('web.category_posts', [
    //         'posts' => $posts,
    //         'categories' => $categories
    //     ]);
    // }

    public function showCategoryPost($id)
    {
        $posts = Post::where('category_id' , $id)->get();
        return view('web.category_posts', compact(['posts']));

    }
}
