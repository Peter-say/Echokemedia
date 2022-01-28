<?php

namespace App\Http\Controllers\Dashboard;

use App\Helpers\Constants;
use App\Helpers\MediaFileHelper;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\support\Str;

class AdminPostController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::whereHas("user")->get();
        return view('dashboards.posts.index', [
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {

        //     $can_post =  User::where('user_id', auth()->id());
        //     $status = User::where(["status" =>  Constants::APPROVED]);

        //    if( $can_post !==  $status){
        //        return  back()->with('error_message', 'not approved' );   
        //    }

        $boolOptions = Constants::BOOL_OPTIONS;
        $types = [Constants::VIDEO, Constants::MUSIC];
        $maxPost = 5;
        $todays_post = Post::where('user_id', auth()->id())
            ->whereDate("created_at", today())->count();

        if ($todays_post > $maxPost) {
            return view('dashboards.503_error');
        } else {
            $categories =  PostCategory::get();
            return view(
                'dashboards.posts.create',
                [
                    'categories' => $categories,
                    'types' => $types,
                    'boolOptions' =>  $boolOptions,
                ]
            );
        }
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
        $data = $request->validate([
            'category_id' => "required|string",
            'name' => 'required|string',
            'content_desccription' => 'required:string',
            "type" => "required|string|in:$allowedTypes",
            'cover_image' => 'required|image',
            "cover_video" => 'required',
            "meta_title" => "required|string",
            "meta_keywords" => "required|string",
            "meta_description" => "required|string",
            "is_sponsored" => "required|string|in:$allowedOptions",
            "is_top_story" => "required|string|in:$allowedOptions", 
            "is_featured" => "required|string|in:$allowedOptions",
            "is_published" => "required|string|in:$allowedOptions",
            "can_comment" => "required|string|in:$allowedOptions",
            
        ]);

        $cover_path = MediaFileHelper::saveFromRequest($request->cover_image , "postImages");
        $video_path = MediaFileHelper::saveFromRequest($request->cover_video , "postVideos");

        $data['cover_image'] = $cover_path;
        $data['cover_video'] = $video_path;
        $data["slug"] = Str::slug($request->title, '-');
        $data['user_id'] = auth()->id();
        $post = Post::create($data);
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
    public function edit($post)
    {
        $post = Post::where("id", $post)->first();
        $boolOptions = Constants::BOOL_OPTIONS;
        $categories = PostCategory::get();
        $types = [Constants::VIDEO, Constants::MUSIC];
        return view(
            'dashboards.posts.edit_post',
            [
                "post" => $post,
                'categories' => $categories,
                'types' => $types,
                'boolOptions' =>  $boolOptions,
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
    public function update(Request $request,  $post)
    {
        $allowedOptions = Constants::ACTIVE . "," . Constants::INACTIVE;
        $allowedTypes = Constants::VIDEO . "," . Constants::MUSIC;
        // $categories = Constants::CATEGORY;
        $request->validate([


            'category_id' => "required|exist:categories,id",
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

        $meidiaImage = $request->name . '_' .  Constants::CATEGORY . '.' .
            $request->cover_image->extension();

        $request->cover_image->move(public_path('postImages'), $meidiaImage);


        $meidiaVideo =  $request->name . '_' . Constants::APP_NAME . '.' .
            $request->cover_video->extension();
        $request->cover_video->move(public_path('postVideos'), $meidiaVideo);



        return back()->with('success_message', 'Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($post)
    {

        Post::where('id', $post)->delete();
        return back()->with("error_message", "Deleted successfully!");
    }
}
