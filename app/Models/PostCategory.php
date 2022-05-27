<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    use HasFactory;
    protected $fillable = ['name' , 'cat_image'];

    public function posts()
    {
        return $this->hasMany(Post::class,  "category_id" , "id");
    }

    public function getRouteKeyName()
    {
        return "name";
    }
}
