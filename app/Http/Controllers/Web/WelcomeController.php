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
    public function newreleases(Request $request, Post $posts , PostCategory $category_id)
    {
        $type  = $request->type;

        $builder1 = Post::where('type', constants::MUSIC);
        $breadcrumbData = $this->getBreadcrumbData($request);
        $categories = PostCategory::all();
        $posts = $builder1->orderby("created_at", "desc")->paginate(12);
        $popularPosts = $builder1->with('category')->limit(1)->get();
        return view('web.newreleases', [
            'posts' => $posts,
            "popularPosts" => $popularPosts,
            "categories" => $categories,
            // "metaData" => PageMetaData::indexPage()
           
        ]);
    }


    public function videosPage(Request $request, PostCategory $category_id)
    {
        $categories = PostCategory::all();
        $builder2 = Post::where('type', constants::VIDEO);
        $videos = $builder2->orderby("created_at", "desc")->paginate(12);
        $popularPosts = $builder2->with('category')->limit(1)->get();
        return view('web.videos', [
            'videos' => $videos,
            "popularPosts" => $popularPosts,
            "categories" => $categories,
            // "metaData" => PageMetaData::indexPage()
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
        return view('web.about' , [
            // "metaData" => PageMetaData::indexPage(),
        ]);
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


    public function show(Post $post, PostCategory $category_id)
    {
        $comments = Comment::get();
        $categories = PostCategory::all();
        $relatedPosts = Post::relatedCategory($post->category_id)->inRandomOrder()->limit(12)->get();
        return view('web.post_details', [
            'post' => $post,
            'comments' =>  $comments,
            "relatedPosts" => $relatedPosts,
            "categories" => $categories,
            "metaData" => PageMetaData::blogDetailsPage($post),
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

    public function search(Post $posts, Request $request)
    {
        
        $search = $_GET['query'];
        $relatedPosts = Post::relatedCategory($posts->category_id)->inRandomOrder()->limit(9)->get();
        $categories = PostCategory::where('name', 'like', '%' . $search . '%')->get();
        $posts = Post::where('name', 'like', '%' . $search . '%')->get();
        return view('web.search' , compact('posts' ,'categories' )); 
    }

    public function headerFilter()
    {
        $categories = PostCategory::all();
        return view('web.layout.nr_fragment.search-form', compact('categories'));
    }

    public function index()
    {
        return view('web.welcome' ,[
            // PageMetaData::indexPage(),
        ]);
    }



    function getFile($id)
    {
        $post = Post::where("slug", $id)->firstOrFail();
        return response()->download($post->cover_music ?? $post->cover_video );
        // return Storage::download();
    }
    function getFileVideo($id)
    {
        $post = Post::where("slug", $id)->firstOrFail();
        return response()->download($post->cover_video );
        // return Storage::download();
    }
}
