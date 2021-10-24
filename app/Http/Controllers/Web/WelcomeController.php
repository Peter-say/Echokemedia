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
use File ;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class WelcomeController extends Controller
{
    public function index()
    {

         // dd($request->all());
        $posts = Post::latest()->get();
        $categories = PostCategory::latest()->get();
        return view('web.welcome', [
            'posts' => $posts,
            'categories' => $categories,
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
        return view('web.blog_entries' , [
            'posts' => $posts,
            'categories' => $categories,
        ]);
    }

    public function contact()
    {
        return view('web.contact');
    }

    public function show($post)
    {
     $comments = Comment::get();
        $post = Post::where("id" , $post)->first();
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

    function getFile($post){
        return response()->download('postVideos\1632686711-hi I like bean.mp4');
        // return Storage::download('postVideos.mp4', $post);
    }
}