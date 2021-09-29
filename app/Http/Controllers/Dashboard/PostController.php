<?php

namespace App\Http\Controllers\Dashboard;

use App\Helpers\MediaHandler;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\User;
use Dotenv\Validator;
use Illuminate\Http\Request;


class PostController extends Controller
{



    public function index()
    {
        $categories = PostCategory::get();
        return view('dashboards.posts.index' , compact('categories'));
       
    }


   

    // public function create( $categories)
   



   

    public function storePost(Request $request , User $user)
    {
        // dd($request->all());
        $request->validate([
           'category_id' => 'required|numeric|exists:post_categories,id',
           'name' => 'required|string' ,
           'content_desccription' => 'required:string',
           'content_type' => 'required|string' ,
           'cover_image' => 'required|image' ,
           "cover_video" => "mimes:mp4,ogx,oga,ogv,ogg,webm",
        //    $image = $request->file('cover_image')->getClientOriginalName(),    
        //    $video = $request->file('cover_video')->getClientOriginalName()

       
     ]);

    


     $meidiaImage = time() . '_' . $request->name . '.' .  
     $request->cover_image->extension();

     $request->cover_image->move(public_path('postImages'), $meidiaImage);


     $meidiaVideo =time() . '-' . $request->name . '.' .  
     $request->cover_video->extension();
     $request->cover_video->move(public_path('postVideos'), $meidiaVideo);

       $request = Post::create([
        'name' =>  $request->input('name') ,
        'content_desccription' =>  $request->input('content_desccription'),
        'content_type' =>  $request->input('content_type') ,
        'cover_image' =>$meidiaImage,
        'cover_video' =>$meidiaVideo,
        'user_id' => auth()->user()->id,
       ]);

       return back()->with('success_message', 'Post added successfully');
    }
}
