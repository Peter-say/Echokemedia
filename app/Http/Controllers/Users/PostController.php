<?php

namespace App\Http\Controllers\Users;

use app\Helpers\Constants;
use App\Helpers\MediaFilesHelper;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        $posts = $user->posts()->with(['user'])->paginate(5);
          return view('users.posts.index' , [
           'user' => $user,
           'posts' => $posts,
          ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user, Post $posts , PostCategory $categories)
    {
         
        $posts = $user->posts()->with(['user'])->first();
        $boolOptions = Constants::BOOL_OPTIONS;
        $categories = PostCategory::where("is_active", Constants::ACTIVE)->get();
        $types = [Constants::VIDEO, Constants::MUSIC];
       
        //  $can_post =  User::where(["status" =>  Constants::APPROVED, ]);
        //  $status = Post::where('user_id', auth()->id());

        // if($can_post !==  $status){
        //     return  back()->with('error_message', 'not approved' );
        // }


        $maxPost = 2;
        $todays_post = Post::where('user_id', auth()->id())
            ->whereDate("created_at", today())->count();

        if ($todays_post > $maxPost) { {
                return view('users.503_error');
            }
        } else {
            $categories = PostCategory::get();
            return view('users.posts.create', [
                'categories' => $categories,
                  'types' => $types,
                   'posts' =>$posts
            ]);
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
            'content_desccription' => 'required|string',
            "type" => "required|string|in:$allowedTypes",
            'cover_image' => 'required|image',
            "cover_video" => "required",
            "meta_title" => "required|string",
            "meta_keywords" => "required|string",
            "meta_description" => "required|string",
        ]);

        $cover_path = MediaFilesHelper::saveFromRequest($request->cover_image , "postImages");
        $video_path =MediaFilesHelper::saveFromRequest($request->cover_video , "postVideos");

        $data['cover_image'] = $cover_path;
        $data['cover_video'] = $video_path;
        $data["slug"] = Str::slug($request->title, '-');
        $data['user_id'] = auth()->id();
        // dd($data);
        Post::create($data);
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
            'users.posts.edit',
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
