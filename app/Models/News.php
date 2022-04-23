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
}
