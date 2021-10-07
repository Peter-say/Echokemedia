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



      public function postlist()
      {
          $posts = Post::whereHas("user")->get();
          return view('dashboards.post-list' ,[
              'posts' => $posts
          ]);
      }

   
        public function index( User $user , Post $categories)
        {

            $maxPost = 2;
            $todays_post = Post::where('user_id' , auth()->id())
            ->whereDate("created_at" , today())->count();

    
            if ($todays_post > $maxPost) {
                return view('dashboards.503_error');
                
            } 
            else{
            $categories = PostCategory::latest()->get();
            return view('dashboards.posts.index', compact('categories'));
    
            }
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
           "cover_video" => "mimes:mp4, mp3, ogx,oga,ogv,ogg,webm",
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


    public function editPost()
    {
        $posts= Post::find(1);
        $categories =  PostCategory::get();
        return view('dashboards.posts.edit_post' , 
        ['categories' => $categories,
         'posts' =>  $posts,
    ]);
    }

    public function updatePost(Request $request , User $user)
    {
        // dd($request->all());
        $request->validate([
           'category_id' => 'required|numeric|exists:post_categories,id',
           'name' => 'required|string' ,
           'content_desccription' => 'required:string',
           'content_type' => 'required|string' ,
           'cover_image' => 'required|image' ,
           "cover_video" => "mimes:mp4, mp3, ogx,oga,ogv,ogg,webm",
        
     ]);

    


     $meidiaImage = time() . '_' . $request->name . '.' .  
     $request->cover_image->extension();

     $request->cover_image->move(public_path('postImages'), $meidiaImage);


     $meidiaVideo =time() . '-' . $request->name . '.' .  
     $request->cover_video->extension();
     $request->cover_video->move(public_path('postVideos'), $meidiaVideo);


       return back()->with('success_message', 'Post Updated successfully');
    }

    
    public function deletePost(Post $post)
    
    {
        $post->delete();
        return back()->with("error_message" , "Deleted successfully!");
    }
}
