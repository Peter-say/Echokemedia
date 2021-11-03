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
use File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class WelcomeController extends Controller
{
    public function index()
    {

        // dd($request->all());
        $posts = Post::latest()->get();
        $categories = PostCategory::latest()->get();
        $trendingTopics = Post::where("is_top_story", Constants::ACTIVE)
            ->limit(10)
            ->inRandomOrder()
            ->get();

        $recents = Post::oldest()
            ->limit(10)
            ->get();

        return view('web.welcome', [
            'posts' => $posts,
            'categories' => $categories,
            "trendingTopics" => $trendingTopics,
            "recents" => $recents,
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
        $post = Post::where("id", $post)->first();
        return view('web.post_details', [
            'post' => $post,
            'comments' =>  $comments,
        ]);
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

    function getFile($post)
    {
        return response()->download('postVideos\1632686711-hi I like bean.mp4');
        // return Storage::download('postVideos.mp4', $post);
    }

    // public function index()
    // {
    //     $trendingTopics = PostCategory::where("is_active", Constants::ACTIVE)
    //         ->where("is_trending", Constants::ACTIVE)
    //         ->whereHas("coverImage")
    //         ->with("coverImage")
    //         ->limit(10)
    //         ->inRandomOrder()
    //         ->get();

    //     $topPosts = Post::blog()
    //         ->active()
    //         ->inRandomOrder()
    //         ->limit(5)
    //         ->get();

    //     $featuredVideos = Post::vlog()
    //         ->active()
    //         ->inRandomOrder()
    //         ->limit(5)
    //         ->get();

    //     $otherPosts = Post::active()
    //         ->inRandomOrder()
    //         ->limit(10)
    //         ->get();


    //     return view("web.pages.index", [
    //         "topPosts" => $topPosts,
    //         "trendingTopics" => $trendingTopics,
    //         "featuredVideos" => $featuredVideos,
    //         "otherPosts" => $otherPosts,

    //     ]);
    // }

}
