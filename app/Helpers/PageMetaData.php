<?php

namespace App\Helpers;

use App\Helpers\MetaData;
use App\Models\Post;

class PageMetaData
{

    const DEFAULT_SUFFIX = "- Echokemedia";
    const DEFAULT_KEYWORDS = "Watch and listen tothe largest collection of Music videos and music anywhere!";

    static public function getTitle(string $name)
    {
        return $name . " " . self::DEFAULT_SUFFIX;
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
        $name = $post->meta_title ?? $post->name;
        return $meta->setAttribute("name", self::getTitle($name))
            ->setAttribute("description", $post->meta_description)
            ->setAttribute("keywords",$post->meta_keywords ?? self::DEFAULT_KEYWORDS)
            ->setAttribute("author", optional($post->user->name) ?? "Admin")
            ->setAttribute("page_topic", $post->name)
            ->setAttribute("og_site_name", url("/"))
            ->setAttribute("og_title", $post->name)
            ->setAttribute("og_description", $post->meta_description)
            ->setAttribute("og_image", $post->cover_image)
            ->setAttribute("og_url", $post->detailsUrl())
            ->setAttribute("twitter_card", $post->cover_image)
            ->setAttribute("twitter_image_alt", $post->name);
            
    }
}
