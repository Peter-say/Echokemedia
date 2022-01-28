<?php

namespace App\Http\Controllers\Web;

use App\Helpers\Sharer;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Jorenvh\Share\ShareFacade;

class SharePostController extends Controller
{
    public function share(Request $request)
    {
        $post = Post::findOrFail($request->id);
        $platform = $request->platform;
        $sharer = null;
        $shareHandler = new Sharer;
        $link = $shareHandler->getLink($platform, $post->detailsUrl());
        return redirect()->away($link);
    }
    
}
