<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use App\Models\Post;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
  public function index()
  {
      $posts = Post::latest()->paginate(20);
      return view('web.welcome'  , [
          'posts' => $posts,
      ]);
  }  

  public function storeContactMessage(Request $request)

  {
   
      $request->validate([
          'name' => 'required',
          'email' => 'required|email',
          'phone_number' => 'required|string',
          'message' => 'required',
      ]);

        $request = ContactUs::create([
          'name' => $request->input('name'),
          'email' => $request->input('email'),
          'phone_number' => $request->input('phone_number'),
          'message' => $request->input('message')
        ]);
        return back()->with('success_message', 'Your message has been successfully sent');
     
  }

  public function about()
  {
      return view('web.about');
  }


  public function blog()
  {
      return view('web.blog_entries');
  }

  public function contact()
  {
      return view('web.contact');
  }

  public function post()
  {
      return view('web.post_details');
  }
}
