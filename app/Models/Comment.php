<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['username', 'email' , 'body', 'parent_id', 'user_id' ,'commentable'];

    public function post()
    {
        return $this->belongsTo(Post::class , 'user_id' , 'parent_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class );
    }

}