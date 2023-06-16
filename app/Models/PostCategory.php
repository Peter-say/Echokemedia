<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    use HasFactory;
    protected $fillable = ['name' , 'cat_image', 'parent_id'];

    public function posts()
    {
        return $this->hasMany(Post::class,  "category_id", "id");
    }

   
    public function category()
    {
        return $this->belongsTo(PostCategory::class);
    }
    
    public function subcategory()
    {
        return $this->hasMany(PostCategory::class , 'parent_id' ,  'id');
    }

    public function getRouteKeyName()
    {
        return "name";
    }
}
