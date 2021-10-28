<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Earnings;
use App\Models\Post;
use Illuminate\Http\Request;

class EarningsController extends Controller
{
    public function earnings(Post $post,  Earnings $money)
    {

        $money = 0.0;
        $posts_count  = Post::where('user_id', auth()->id())->count();
        $total = $posts_count * $money;

        return view('dashboards.earnings', [
            'total' => $total,
        ]);
    }
}
