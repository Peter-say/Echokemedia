<?php

namespace App\Http\Controllers\Dashboard;

use App\Helpers\Constants;
use App\Helpers\MediaFilesHelper;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\support\Str;

class AdminMusicController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::whereHas("user")->get();
        $post_type = Post::first();
        $type = $post_type;
        return view('dashboards.posts.index', [
            'posts' => $posts,
            'post_type' => $post_type,
            'type' => $type,
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
        $types = Constants::MUSIC;
        $maxPost = 15;
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
    public function store(Request $request, Post $post)
    {
        // dd($request->all());
        $allowedOptions = Constants::ACTIVE . "," . Constants::INACTIVE;
        $allowedTypes = Constants::MUSIC;
        $data = $request->validate([
            'category_id' => "string|nullable",
            'name' => 'required|string',
            'content_desccription' => 'required:string',
            "type" => "required|string|in:$allowedTypes",
            'cover_image' => 'required|image',
            "cover_music" => 'required:mimes:mp3',
            "meta_title" => "required|string",
            "meta_keywords" => "required|string",
            "meta_description" => "required|string",
            "is_sponsored" => "required|string|in:$allowedOptions",
            "is_top_story" => "required|string|in:$allowedOptions",
            "is_featured" => "required|string|in:$allowedOptions",
            "is_published" => "required|string|in:$allowedOptions",
            "can_comment" => "required|string|in:$allowedOptions",
        ]);
        $image_path = MediaFilesHelper::saveFromRequest($request->cover_image, "postImages", $request);
        $music_path = MediaFilesHelper::saveFromRequest($request->cover_music, "postMusic", $request);

        $data['cover_image'] = $image_path;
        $data['cover_music'] = $music_path;
        $data["slug"] = Str::slug($request->name, '-');
        $data['user_id'] = auth()->id();
        Post::create($data);
        return redirect()->route('admin.post.index')->with('success_message', 'Post added successfully');
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
        $post = Post::where("id", $id)->first();
        $boolOptions = Constants::BOOL_OPTIONS;
        $categories = PostCategory::get();
        $types = Constants::MUSIC;
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
    public function update(Request $request, $id)
    {
        $allowedOptions = Constants::ACTIVE . ",". Constants::INACTIVE;
        $allowedTypes = Constants::MUSIC;
        $data = $request->validate([
            'category_id' => "required|string",
            'name' => 'required|string',
            'content_desccription' => 'required:string',
            "type" => "required|string|in:$allowedTypes",
            "meta_title" => "required|string",
            "meta_keywords" => "required|string",
            "meta_description" => "required|string",
            "is_sponsored" => "required|string|in:$allowedOptions",
            "is_top_story" => "required|string|in:$allowedOptions",
            "is_featured" => "required|string|in:$allowedOptions",
            "is_published" => "required|string|in:$allowedOptions",
            "can_comment" => "required|string|in:$allowedOptions",
        ]);
    
         if ($request->file('cover_image')) {
                 $image_path = MediaFilesHelper::saveFromRequest($request->cover_image, "postImages", $request);
                 $data['cover_image'] = $image_path;
               
            }
            if ($request->file('cover_music')) {
                 $music_path = MediaFilesHelper::saveFromRequest($request->cover_music, "postMusic", $request);
                 $data['cover_music'] = $music_path;
               
            }
        $post = Post::where('id', $id)->update($data);
        return redirect()->route('admin.post.index')->with('success_meassage',  'Post updated successfully');
    
    }

       

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {

        Post::where('id', $id)->delete();
        return redirect()->route('admin.post.index')->with("error_message", "Deleted successfully!");
    }
}
