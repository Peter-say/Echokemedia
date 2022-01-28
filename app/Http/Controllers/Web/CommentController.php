<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request  $request)
    {
        $data = $request->validate([
            'username' => 'required|string',
            'email' => 'nullable|string',
            'body' => 'required|string',
        ]);
        
        $comment = new Comment;
        $comment->username = $request->username;
        $comment->email = $request->email;
        $comment->body = $request->body;
        $post = Post::find($request->input('post_id'));
        $post->comments()->save($comment);
        
        return back()->with('success_message', 'Your comment has been successfully submited');

        // // dd($request->all());
        // $comment = new Comment;
        // $comment->body = $request->get('body');
        // if(!empty( $comment->email = $request->get('email')));
        // $comment->username = $request->get('username');
        // $post = Post::find($request->input('parent_id'));
        // // dd($comment,  $post);
        // $post->comments()->save($comment);

        // return back()->with('success_message', 'Your comment has been successfully submited');
    }
}
