<?php

namespace App\Http\Controllers\Web;

use App\Helpers\Sharer;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class SharePostController extends Controller
{
    public function share(Request $request)
    {
        $post = Post::first();
        $sharer = null;
        $platform = $request->platform;
        $shareHandler = new Sharer;
        $link = $shareHandler->getLink($platform, $post->detailsUrl($post));
        return redirect()->away($link);
    }
    
}
