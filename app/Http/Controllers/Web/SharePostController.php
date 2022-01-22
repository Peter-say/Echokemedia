<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Jorenvh\Share\ShareFacade;

class SharePostController extends Controller
{
    public function SharePost()
    {
        $share_posts = ShareFacade::currentPage()->facebook();
       
        // dd($share_post);
        // return view('web.welcome', ['share_posts' => $share_posts]);
    }
}
