<?php

namespace App\Http\Controllers\Web;

use App\Helpers\Constants;
use App\Helpers\PageMetaData;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\ContactUs;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use App\Helpers\Sharer;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Jorenvh\Share\ShareFacade;
use Illuminate\Support\Arr;

class WelcomeController extends Controller
{
    public function newreleases(Request $request)
    {
         $type  = $request->type;

        if (ucfirst($type) == Constants::MUSIC) {
            $builder1 = Post::music();
            $builder2 = Post::video();
        } else {
            $builder1 = Post::video();
            $builder2 = Post::music();
        }

        $music = $builder1->orderby("created_at", "desc")->paginate(12);;
        $popularPosts = $builder1->orderby("views_count", "desc")->limit(5)->get();
        $video = $builder2->inRandomOrder()->first();

        $breadcrumbData = $this->getBreadcrumbData($request);
        $music->appends($request->query());


        return view('web.newreleases', [
            'music' => $music,
            "popularPosts" => $popularPosts,
            // "metaData" => PageMetaData::blogDetailsPage($type)
        ]);
    }

    public function recent()
    {
        $categories = PostCategory::get();
        $posts = Post::latest()
            ->paginate(12);
        return view('web.layouts.includes.pages-sidebar', [
            'posts' => $posts,
            'categories' => $categories
        ]);
    }



    public function about()
    {
        return view('web.about');
    }


    public function blog()
    {
        $posts = Post::latest()->get();
        $categories = PostCategory::latest()->get();
        return view('web.blog_entries', [
            'posts' => $posts,
            'categories' => $categories,
        ]);
    }


    public function show(Post $post)
    {
        $comments = Comment::get();
        return view('web.post_details', [
            'post' => $post,
            'comments' =>  $comments,
            // "metaData" => PageMetaData::blogDetailsPage($post)
        ]);
    }

    
    public function getBreadcrumbData($request)
    {
        $title = ucfirst($request->type);
        $value = "";
        $searchKeyword = $request->search;

        if (!empty($searchKeyword)) {
            $title = "Search result for: ";
            $value = "\"$searchKeyword\"";
        }

        return [
            "breadcrumbTitle" => $title,
            "breadcrumbValue" => $value
        ];
    }

    public function search(Request $request)
    {
        $search = $_GET['query'];
        $categories = PostCategory::where('name', 'like', '%' . $search . '%')->get();
        $posts = Post::where('name', 'like', '%' . $search . '%')->get();
        return view('web.welcome', [
            "posts" => $posts,
            "categories" => $categories,
            // "metaData" => PageMetaData::searchPage()
        ]);
    }

    public function index()
    {
        return view('web.welcome');
    }



    function getFile($id)
    {
        $post = Post::where("id", $id)->firstOrFail();
        return response()->download($post->cover_video);
        // return Storage::download('postVideos.mp4', $post);
    }
}
