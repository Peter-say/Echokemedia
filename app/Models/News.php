<?php

namespace App\Models;

use App\Helpers\Constants;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $guarded = [];

    //     protected  $fillable = [ 'cover_image ', 'content_desccription', 'meta_title', 
    //     'meta_description', 'meta_keywords'
    // ];
    protected $primaryKey = 'user_id';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id');
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
