<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\ContactUs;
use App\Models\Post;
use App\Models\PostCategory;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
  public function index()
  {
      $posts = Post::latest()->get();
      $categories = PostCategory::latest()->find(1);
      return view('web.welcome'  , [
          'posts' => $posts,
          'categories' => $categories,
      ]);
  }  

  public function show(Post $post)
  {
      $posts = Post::find(1);
      return view('web.post_details' ,[
          'posts' => $posts
      ]);
  }

  public function storeComment(Request $request)

  {
  
      $request->validate([
          'name' => 'required',
          'email' => 'required|email',
          'comment' => 'required|string',
          
      ]);

        $request = Comment::create([
          'name' => $request->input('name'),
          'email' => $request->input('email'),
          'comment' => $request->input('comment'),
          'user_id' => auth()->user()->id,
         
        ]);
        return back()->with('success_message', 'Your comment has been successfully submited');
     
  }

  public function about()
  {
      return view('web.about');
  }


  public function blog()
  {
      return view('web.blog_entries');
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
