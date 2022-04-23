<?php

namespace App\Http\Controllers\Users;

use app\Helpers\Constants;
use App\Helpers\MediaFilesHelper;
use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\PostCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        $posts = $user->posts()->with(['user'])->paginate(5);
        return view('users.news.index' , [
         'user' => $user,
         'posts' => $posts,
        ]);

        $maxPost = 2;
        $todays_post = News::where('user_id', auth()->id())
            ->whereDate("created_at", today())->count();

        if ($todays_post > $maxPost) { {
                return view('users.503_error');
            }
        } else {
            $categories = PostCategory::get();
            return view('users.news.create', [
                'categories' => $categories,
                   'posts' =>$posts
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user, News $posts , PostCategory $categories)
    {
          
        $posts = $user->posts()->with(['user'])->first();
        $boolOptions = Constants::BOOL_OPTIONS;
        $categories = PostCategory::where("is_active", Constants::ACTIVE)->get();
       

        $maxPost = 2;
        $todays_post = News::where('user_id', auth()->id())
            ->whereDate("created_at", today())->count();

        if ($todays_post > $maxPost) { {
                return view('users.503_error');
            }
        } else {
            $categories = PostCategory::get();
            return view('users.news.create', [
                'categories' => $categories,
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
        $request->validate([
            'category_id' => "required|string",
            'name' => 'required|string',
            'content_desccription' => 'required|string',
            'cover_image' => 'required|image',
            "meta_title" => "required|string",
            "meta_keywords" => "required|string",
            "meta_description" => "required|string",
        ]);

        $cover_path = MediaFilesHelper::saveFromRequest($request->cover_image , "postImages");
        $data['cover_image'] = $cover_path;
        $data["slug"] = Str::slug($request->title, '-');
        $data['user_id'] = auth()->id();
        // dd($data);
        News::create($data);
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
        $post = News::where("id", $post)->first();
        $boolOptions = Constants::BOOL_OPTIONS;
        $categories = PostCategory::get();
        return view(
            'users.news.edit',
            [
                "post" => $post,
                'categories' => $categories,
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
