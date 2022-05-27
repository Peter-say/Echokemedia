<?php

namespace App\Models;

use App\Helpers\Constants;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Post extends Model
{
    use HasFactory , Notifiable;

    protected $guarded = [];

    protected $primaryKey = 'user_id';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class , 'post_id');
    }

    public function scopeMusic($query)
    {
        return $query->where("type", Constants::MUSIC);
    }

    public function scopeVideo($query)
    {
        return $query->where("type", Constants::VIDEO);
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

        return $this->belongsTo(PostCategory::class ,  "category_id" , "id");
    }

    public static function scopeRelatedCategory($query, $category_id)
    {
        return $query->where("category_id", $category_id);
    }

    public  function detailsUrl(Post $post)
    {
        // $post = Post::where('id', $post)->first();  
        return route("post.show", $post , [
            "id" => $this->id,
            "slug" => slugify($this->name),
            "name" => $this->name
        ]);
    }
   

   
}
