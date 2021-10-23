<?php

namespace App\Http\Controllers\Dashboard;

use App\Helpers\Constants;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boolOptions = Constants::BOOL_OPTIONS;
        $categories = PostCategory::where("is_active", Constants::ACTIVE)->get();
        $types = [Constants::VIDEO, Constants::MUSIC];
        $maxPost = 2;
        $todays_post = Post::where('user_id', auth()->id())
            ->whereDate("created_at", today())->count();


        if ($todays_post > $maxPost) {
            return view('dashboards.503_error');
        } else {
            $categories = PostCategory::latest()->get();
            return view('dashboards.posts.index', 
            [
                'categories' => $categories,
                'types' => $types,
                'boolOptions' =>  $boolOptions,
        ]);
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
        
        
        $allowedOptions = Constants::ACTIVE . "," . Constants::INACTIVE;
        $allowedTypes = Constants::VIDEO . "," . Constants::MUSIC;
        $request->validate([
            'category_id' => 'required|numeric|exists:post_categories,id',
            'name' => 'required|string',
            'content_desccription' => 'required:string',
            "type" => "required|string|in:$allowedTypes",
            'cover_image' => 'required|image',
            "cover_video" => "mimes:mp4, mp3, ogx,oga,ogv,ogg,webm",
            "is_sponsored" => "required|string|in:$allowedOptions",
            "is_top_story" => "required|string|in:$allowedOptions",
            "is_featured" => "required|string|in:$allowedOptions",
            "is_published" => "required|string|in:$allowedOptions",
            "can_comment" => "required|string|in:$allowedOptions",
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
            'type' =>  $request->input('type'),
            'cover_image' => $meidiaImage,
            'cover_video' => $meidiaVideo,
            'is_sponsored' => $request->input('is_sponsored'),
            'is_top_story' => $request->input('"is_top_story'),
            'is_featured' => $request->input('is_featured'),
            'can_comment' => $request->input('can_comment'),
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}