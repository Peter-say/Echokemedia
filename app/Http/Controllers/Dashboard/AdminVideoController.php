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
use Illuminate\support\Str;

class AdminVideoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Post::where('type', 'cover_video')->whereHas("user")->get();
        return view('dashboards.video.index', [
            'videos' => $videos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //     $can_post =  User::where('user_id', auth()->id());
        //     $status = User::where(["status" =>  Constants::APPROVED]);

        //    if( $can_post !==  $status){
        //        return  back()->with('error_message', 'not approved' );   
        //    }

        $boolOptions = Constants::BOOL_OPTIONS;
        $types = Constants::VIDEO;
        $maxPost = 15;
        $todays_post = Post::where('user_id', auth()->id())
            ->whereDate("created_at", today())->count();

        if ($todays_post > $maxPost) {
            return view('dashboards.503_error');
        } else {
            $categories =  PostCategory::get();
            return view(
                'dashboards.video.create',
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
        $allowedTypes = Constants::VIDEO;
        $data = $request->validate([
            'category_id' => "required|string",
            'name' => 'required|string',
            'content_desccription' => 'required:string',
            "type" => "required|string|in:$allowedTypes",
            'cover_image' => 'required|image',
            "cover_video" => 'required:mimes:mp4,mov,ogg,qt',
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
        $video_path = MediaFilesHelper::saveFromRequest($request->cover_video, "postVideo" , $request);

        $data['cover_image'] = $image_path;
        $data['cover_video'] = $video_path;
        $data["slug"] = Str::slug($request->name, '-');
        $data['user_id'] = auth()->id();
        // dd($request->all());
        Post::create($data);
        return redirect()->route('admin.video.index')->with('success_message', 'Post added successfully');
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
        $types = Constants::VIDEO;
        return view(
            'dashboards.video.edit',
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
        // dd($request->all());
        $allowedOptions = Constants::ACTIVE . "," . Constants::INACTIVE;
        $allowedTypes = Constants::VIDEO;
        $post = Post::where('id', $id);
        // dd($id);
        $data = $request->validate([
            'category_id' => "required|string",
            'name' => 'required|string',
            'content_desccription' => 'required:string',
            "type" => "nullable|string|in:$allowedTypes",
            'cover_image' => 'nullable|image',
            "cover_video" => 'required|mimes:mp4',
            "meta_title" => "required|string",
            "meta_keywords" => "required|string",
            "meta_description" => "required|string",
            "is_sponsored" => "required|string|in:$allowedOptions",
            "is_top_story" => "required|string|in:$allowedOptions",
            "is_featured" => "required|string|in:$allowedOptions",
            "is_published" => "required|string|in:$allowedOptions",
            "can_comment" => "required|string|in:$allowedOptions",
        ]);
        // dd($data);
        $image_path = MediaFilesHelper::saveFromRequest($request->cover_image, "postImages", $request);
        $video_path = MediaFilesHelper::saveFromRequest($request->cover_video, "postVideo" , $request);

        $data['cover_image'] = $image_path;
        $data['cover_video'] = $video_path;
        $data["slug"] = Str::slug($request->name, '-');
        $data['user_id'] = auth()->id();
        // dd($post);
        // dd($data);
        $post->update($data);
        return redirect()->route('admin.post.index')->with('success_message', 'Post updated successfully');
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
