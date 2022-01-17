<?php

namespace App\Http\Controllers\Dashboard;

use App\Helpers\Constants;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        // current authenticated user status
        // $userStatus = auth()->user()->status;
        // if the current authenticated user status is not approved return false
        // if($userStatus != Constants::APPROVED){
        //     return back()->with('error_message', 'not approved');
        // }

        // if (User::where('user_id', auth()->user()) && ('status' == Constants::APPROVED)) {
        //     $categories =  PostCategory::get();
        //     return view(
        //         'dashboards.posts.create',
        //         [
        //             'categories' => $categories,
        //             'types' => $types,
        //             'boolOptions' =>  $boolOptions,
        //         ]
        //     );
        // } else {
        //     return  back()->with('error_message', 'not approved');
        // }

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
        // dd($request->all());
        $allowedOptions = Constants::ACTIVE . "," . Constants::INACTIVE;
        $allowedTypes = Constants::VIDEO . "," . Constants::MUSIC;
        $request->validate([
            'category_id' => "required|string",
            'name' => 'required|string',
            'content_desccription' => 'required:string',
            "type" => "required|string|in:$allowedTypes",
            'cover_image' => 'required|image',
            "cover_video" => 'required',
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
            'category_id' =>  $request->input('category_id'),
            'name' =>  $request->input('name'),
            'content_desccription' =>  $request->input('content_desccription'),
            'type' =>  $request->input('type'),
            'cover_image' => $meidiaImage,
            'cover_video' => $meidiaVideo,
            'is_sponsored' => $request->input('is_sponsored'),
            'is_top_story' => $request->input('"is_top_story'),
            'is_featured' => $request->input('is_featured'),
            'can_comment' => $request->input('can_comment'),
            'is_published' => $request->input('is_published'),
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

        $meidiaImage = time() . '_' . $request->name . '.' .
            $request->cover_image->extension();

        $request->cover_image->move(public_path('postImages'), $meidiaImage);


        $meidiaVideo = time() . '-' . $request->name . '.' .
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

    public function destroy( $post)
    {
        
        Post::where('id' , $post)->delete();
        return back()->with("error_message", "Deleted successfully!");
    }
}
