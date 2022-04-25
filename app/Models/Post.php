<?php

namespace App\Models;

use App\Helpers\Constants;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $primaryKey = 'user_id';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class , 'post_id');
    }

    public function scopeBlog($query)
    {
        return $query->active()->where("type", Constants::MUSIC);
    }

    public function scopeVlog($query)
    {
        return $query->active()->where("type", Constants::VIDEO);
    }
   
    public  function isMusic()
    {
        return strtolower($this->type) == strtolower(Constants::MUSIC);
    }

    public  function isVideo()
    {
        return strtolower($this->type) == strtolower(Constants::VIDEO);
    }


    public function category()
    {

        return $this->belongsTo(PostCategory::class);
    }

   

   
}
