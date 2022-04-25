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


    public function scopeActive($query)
    {
        return $query->where("is_top-story", Constants::ACTIVE);
    }

    public function scopeVideo($query)
    {
        return $query->active()->where("type", Constants::VIDEO);
    }

    public function scopeMusic($query)
    {
        return $query->active()->where("type", Constants::MUSIC);
    }


    public function isMusic()
    {
        return strtolower($this->type) == strtolower(Constants::MUSIC);
    }


    public function category()
    {

        return $this->belongsTo(PostCategory::class);
    }

    public function scopeSearch($query, $keyword)
    {
        if (!empty($keyword)) {
            $query = $query->where("title", "like", "%$keyword%");
        }
        return $query;
    }

    public function detailsUrl($sharer = null)
    {
        return route("post.show", [
            "post" => $this->name,
            "sharer" => $sharer
        ]);
    }

    public function coverImageUrl()
    {
        $coverImage = $this->coverImage;

        $filepath = optional($coverImage)->path;

        if (!empty($filepath)) {
            return readFileUrl("encrypt", $filepath);
        }
    }

   
}
