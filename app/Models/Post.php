<?php

namespace App\Models;

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


    public function post()
    {

        return $this->belongsTo(PostCategory::class,  'category_id', 'user_id');
    }

    public function scopeSearch($query, $keyword)
    {
        if (!empty($keyword)) {
            $query = $query->where("title", "like", "%$keyword%");
        }
        return $query;
    }

   
}
