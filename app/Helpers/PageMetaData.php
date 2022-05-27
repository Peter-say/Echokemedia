<?php

namespace App\Helpers;

use App\Helpers\MetaData;
use App\Models\Post;
use Illuminate\Support\Str;

class PageMetaData
{

    const DEFAULT_SUFFIX = "- Echokemedia";
    const DEFAULT_KEYWORDS = "Watch and listen to the largest collection of Music videos and music anywhere!";

    static public function getTitle(string $name)
    {
        return $name . " " . self::DEFAULT_SUFFIX;
    }

  
    static public function contactPage()
    {
        $meta = new MetaData();

        return $meta->setAttribute("title", self::getTitle("Contact Us"))
            ->setAttribute("description", "Quick contacts")
            ->setAttribute("keywords", self::DEFAULT_KEYWORDS)
            ->setAttribute("author", "Peace" ." " ."Peter")
            ->setAttribute("audience", "Public")
            ->generate();

    }

    static public function searchPage()
    {
        $meta = new MetaData();
        return $meta->setAttribute("name", self::getTitle("Search"))
            ->setAttribute("description", "Blog descrpition")
            ->setAttribute("keywords", self::DEFAULT_KEYWORDS)
            ->generate();
    }

    static public function indexPage()
    {
        $meta = new MetaData();
        return $meta->setAttribute("title", self::getTitle("Home"))
            ->setAttribute("description", "Welcome to echokemedia.com")
            ->setAttribute("keywords", self::DEFAULT_KEYWORDS)
            ->setAttribute("author", "Author")
            ->setAttribute("audience", "Public")
            ->generate();
    }


    static public function blogDetailsPage(Post $post)
    {
        $meta = new Post();
        $name = $post->name;
        return $meta->setAttribute("name", $name)
            ->setAttribute("description", $post->meta_description)
            ->setAttribute("keywords",$post->meta_keywords ?? self::DEFAULT_KEYWORDS)
            ->setAttribute("author", "Admin")
            ->setAttribute("page_topic", $post->name)
            ->setAttribute("og_site_name", url("Echokemedia"))
            ->setAttribute("og_title", $post->name)
            ->setAttribute("og_description", $post->meta_description)
            ->setAttribute("og_image", $post->cover_image ?? $post->cover_video )
            ->setAttribute("og_url", $post , Str::slug($name , '-'))
            ->setAttribute("twitter_card", $post->cover_image)
            ->setAttribute("twitter_image_alt", $post->name);
            
    }
}

