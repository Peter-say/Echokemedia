<?php

namespace App\Http\Controllers\Web;

use App\Helpers\Constants;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\ContactUs;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use App\Helpers\Sharer;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class WelcomeController extends Controller
{
    public function index()
    {
        $categorytop = 40;
        // dd($request->all());
        $posts = Post::latest()->get();
        $categories = PostCategory::latest()->get();
        $trendingTopics = Post::latest()->get();


        $recents = Post::oldest()
            ->limit(10)
            ->get();

        return view('web.welcome', [
            'posts' => $posts,
            'categories' => $categories,
            "trendingTopics" => $trendingTopics,
            "recents" => $recents,
            "categorytop" =>  $categorytop,
        ]);
    }

    public function recent()
    {
        $posts = Post::latest()
            ->paginate(12);
        return view('web.layouts.includes.pages-sidebar', [
            'posts' => $posts,
        ]);
    }


    public function storeComment(Request $request, User $user)
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
        // dd($post);
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
        return view('web.blog_entries', [
            'posts' => $posts,
            'categories' => $categories,
        ]);
    }


    public function show($post)
    {
        $comments = Comment::get();
        $post = Post::find(1);
        return view('web.post_details', [
            'post' => $post,
            'comments' =>  $comments,
        ]);
    }

    public function search(Request $request)
    {
        $search = $_GET['query'];
        $posts = Post::where('name', 'like', '%' . $search . '%')->get();
        return view('web.welcome', [
            "posts" => $posts,
        ]);
    }



    function getFile($id)
    {
        $post = Post::where("id", $id)->firstOrFail();
        return response()->download('postVideos/' . $post->cover_video);
        // return Storage::download('postVideos.mp4', $post);
    }
    public function share(Request $request, Post $post)
    {
        $post = Post::first();
        $platform = $request->platform;

        $sharer = new Sharer;
        $link = $sharer->getLink($platform, $post->detailsUrl($sharer));
        return redirect()->away($link);
    }
}
