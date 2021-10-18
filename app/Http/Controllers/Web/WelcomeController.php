<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\ContactUs;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        $categories = PostCategory::latest()->get();
        return view('web.welcome', [
            'posts' => $posts,
            'categories' => $categories,
        ]);
    }

    public function show()
    {
        $posts = Post::latest()->find(1);
        $comments = Comment::latest()->get();
        return view('web.post_details', [
            'posts' => $posts,
            'comments' => $comments
        ]);
    }



    public function storeComment(Request $request , User $user)
    {
        // dd($request->all());
        $request->validate([
            'username' => 'required|string',
            'email' => 'required|string',
            'body' => 'required|string',
        ]);
 

        $comment = new Comment;
        $comment->body = $request->get('body');
        $comment->email = $request->get('email');
        $comment->username = $request->get('username');
        $comment->user()->associate($request->user());
        $post = Post::find($request->get('post_id'));
        $post->comments()->save($comment);

      

        return back()->with('success_message', 'Your comment has been successfully submited');
    }

    public function about()
    {
        return view('web.about');
    }


    public function blog()
    {
        $posts = Post::latest()->get();
        $categories = PostCategory::latest()->get();
        return view('web.blog_entries' , [
            'posts' => $posts,
            'categories' => $categories,
        ]);
    }

    public function comment()
    {
        return view('web.contact');
    }

    public function post()
    {
        return view('web.post_details');
    }

    public function search(Request $request)
    {
        $searchKeyword = $request->search;
        $posts = Post::search($searchKeyword)->orderby("created_at", "desc")->paginate(10);
        $posts->appends($request->query());
        return view("web.welcome", array_merge([
            "searchKeyword" => $searchKeyword,
            "posts" => $posts,
        ]));
    }
}
