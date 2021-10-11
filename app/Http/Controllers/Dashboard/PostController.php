<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user, Post $categories)
    {
        $maxPost = 2;
        $todays_post = Post::where('user_id', auth()->id())
            ->whereDate("created_at", today())->count();


        if ($todays_post > $maxPost) {
            return view('dashboards.503_error');
        } else {
            $categories = PostCategory::latest()->get();
            return view('dashboards.posts.index', compact('categories'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dashboards.posts.index");
    }

    /** 
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'category_id' => 'required|numeric|exists:post_categories,id',
            'name' => 'required|string',
            'content_desccription' => 'required:string',
            'content_type' => 'required|string',
            'cover_image' => 'required|image',
            "cover_video" => "mimes:mp4, mp3, ogx,oga,ogv,ogg,webm",

        ]);

        $meidiaImage = time() . '_' . $request->name . '.' .
            $request->cover_image->extension();

        $request->cover_image->move(public_path('postImages'), $meidiaImage);


        $meidiaVideo = time() . '-' . $request->name . '.' .
            $request->cover_video->extension();
        $request->cover_video->move(public_path('postVideos'), $meidiaVideo);

        $request = Post::create([
            'name' =>  $request->input('name'),
            'content_desccription' =>  $request->input('content_desccription'),
            'content_type' =>  $request->input('content_type'),
            'cover_image' => $meidiaImage,
            'cover_video' => $meidiaVideo,
            'user_id' => auth()->user()->id,
        ]);

        return back()->with('success_message', 'Post added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $download = Post::find($id);
        return Storage::download($download->path , $download->name);
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = Post::find(1);
        $categories =  PostCategory::get();
        return view(
            'dashboards.posts.edit_post',
            [
                'categories' => $categories,
                'posts' =>  $posts,
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            'category_id' => 'required|numeric|exists:post_categories,id',
            'name' => 'required|string',
            'content_desccription' => 'required:string',
            'content_type' => 'required|string',
            'cover_image' => 'required|image',
            "cover_video" => "mimes:mp4, mp3, ogx,oga,ogv,ogg,webm",

        ]);




        $meidiaImage = time() . '_' . $request->name . '.' .
            $request->cover_image->extension();

        $request->cover_image->move(public_path('postImages'), $meidiaImage);


        $meidiaVideo = time() . '-' . $request->name . '.' .
            $request->cover_video->extension();
        $request->cover_video->move(public_path('postVideos'), $meidiaVideo);


        return back()->with('success_message', 'Post Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return back()->with("error_message", "Deleted successfully!");
    }
}
