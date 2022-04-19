<?php

namespace App\Helpers;

use App\Helpers\MetaData;
use App\Models\Post;

class PageMetaData
{

    const DEFAULT_SUFFIX = "- Echokemedia";
    const DEFAULT_KEYWORDS = "blog, entertament";

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

    static public function blogDetailsPage(Post $post)
    {
        $meta = new Post();
        $name = $post->meta_title ?? $post->name;
        return $meta->setAttribute("name", self::getTitle($name))
            ->setAttribute("description", $post->meta_description)
            ->setAttribute("keywords",$post->meta_keywords ?? self::DEFAULT_KEYWORDS)
            ->setAttribute("author", optional($post->author)->names() ?? "Admin")
            ->setAttribute("page_topic", $post->name)
            ->setAttribute("og_site_name", url("/"))
            ->setAttribute("og_title", $post->title)
            ->setAttribute("og_description", $post->meta_description)
            ->setAttribute("og_image", $post->saveFromRequest())
            ->setAttribute("og_url", $post->detailsUrl())
            ->setAttribute("twitter_card", $post->saveFromRequest())
            ->setAttribute("twitter_image_alt", $post->title)
            ->generate();
    }
}
