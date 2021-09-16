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
    ];

    protected $primaryKey = 'user_id';

    public function user()
    {
        return $this->belongsTo(User::class );
    }


    public function post()

    {
        return $this->belongsTo(PostCategory::class,  'category_id');
    }
}