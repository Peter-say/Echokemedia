<?php

namespace App\Models;

use App\Helpers\Constants;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'content_type',
        'cover_video',
        'cover_image',
        'content_desccription',
        'user_id'
    ];

    protected $primaryKey = 'user_id';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class,'commentable')->whereNull('parent_id' , 'user_id' );
    }


    public function scopeActive($query)
    {
        return $query->where("is_top-story", Constants::ACTIVE);
    }

    public function scopeBlog($query)
    {
        return $query->active()->where("type", Constants::VIDEO);
    }

    public function scopeVlog($query)
    {
        return $query->active()->where("type", Constants::MUSIC);
    }


    public function category()
    {

        return $this->belongsTo(PostCategory::class,  'category_id');
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
        return view("web.welcome", [
            "uuid" => $this->id,
            "slug" => slugify($this->title),
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
