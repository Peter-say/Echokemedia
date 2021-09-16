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


    
    public $mediaHandler;
    public function __construct(MediaHandler $mediaHandler)
    {
        $this->mediaHandler = $mediaHandler;
    }

    public function index()
    {
        $categories = PostCategory::get();
        return view('dashboards.posts.index' , compact('categories'));
       
    }

    // public function create( $categories)
   



    public function saveCoverMedia(Request $request, $user_id, array $data, Post $post)
    {
        if (!empty($cover_image = $request->file("cover_image"))) {
            $filePath = putFileInPrivateStorage($cover_image, "temp");
            $coverImageFile = $this->mediaHandler
                ->saveFromFilePath(storage_path("app/$filePath"), "post_images", $post->cover_image ?? null, $user_id);
            $data["cover_image"] = $coverImageFile->id;
        }

        if (!empty($cover_video = $request->file("cover_video"))) {
            $filePath = putFileInPrivateStorage($cover_video, "temp");
            $coverVideoFile = $this->mediaHandler
                ->saveFromFilePath(storage_path("app/$filePath"), "post_videos", $post->cover_video ?? null, $user_id);
            $data["cover_video"] = $coverVideoFile->id;
        }

        return $data;
    }


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
           
        ]);

       $request = Post::create([
        'name' =>  $request->input('name') ,
        'content_desccription' =>  $request->input('content_desccription'),
        'content_type' =>  $request->input('content_type') ,
        'cover_image' => $request->file('cover_image'),
        'cover_video' => $request->file('cover_video'),
        'user_id' => $user->id
       ]);

       return back()->with('success_message', 'Post added successfully');
    }
}
