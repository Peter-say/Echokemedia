<?php

namespace App\Helpers;

use App\Helpers\MetaData;
use App\Models\Post;

class PageMetaData
{

    const DEFAULT_SUFFIX = "- Flairworlds";
    const DEFAULT_KEYWORDS = "blog, crypto, entertaint";

    static public function getTitle(string $title)
    {
        return $title . " " . self::DEFAULT_SUFFIX;
    }

    static public function indexPage()
    {
        $meta = new MetaData();
        return $meta->setAttribute("title", self::getTitle("Home"))
            ->setAttribute("description", "Welcome to flairworld.com")
            ->setAttribute("keywords", self::DEFAULT_KEYWORDS)
            ->setAttribute("author", "Peter" ?? "Peace")
            ->setAttribute("audience", "Public")
            ->generate();
    }

    static public function contactPage()
    {
        $meta = new MetaData();

        return $meta->setAttribute("title", self::getTitle("Contact Us"))
            ->setAttribute("description", "Rapid contacts")
            ->setAttribute("keywords", self::DEFAULT_KEYWORDS)
            ->setAttribute("author", "Peter" ?? "Peace")
            ->setAttribute("audience", "Public")
            ->generate();
            
    }
    static public function about()
    {
        $meta = new MetaData();

        return $meta->setAttribute("title", self::getTitle("About Us"))
            ->setAttribute("description", "About us")
            ->setAttribute("keywords", self::DEFAULT_KEYWORDS)
            ->setAttribute("author", "Peter" ?? "Peace")
            ->setAttribute("audience", "Public")
            ->generate();
            
    }

    static public function blogPage($type)
    {
        $meta = new MetaData();
        return $meta->setAttribute("title", self::getTitle(ucfirst($type)))
            ->setAttribute("description", "Blog descrpition")
            ->setAttribute("keywords", self::DEFAULT_KEYWORDS)
            ->generate();
    }

    static public function searchPage()
    {
        $meta = new MetaData();
        return $meta->setAttribute("title", self::getTitle("Search"))
            ->setAttribute("description", "Blog descrpition")
            ->setAttribute("keywords", self::DEFAULT_KEYWORDS)
            ->generate();
    }

    static public function blogDetailsPage(Post $post)
    {
        $meta = new MetaData();
        $title = $post->meta_title ?? $post->title;
        return $meta->setAttribute("title", self::getTitle($title))
            ->setAttribute("description", $post->meta_description)
            ->setAttribute("keywords",$post->meta_keywords ?? self::DEFAULT_KEYWORDS)
            ->setAttribute("author", optional($post->author)->names() ?? "Admin")
            ->setAttribute("page_topic", $post->title)
            ->setAttribute("og_site_name", url("/"))
            ->setAttribute("og_title", $post->title)
            ->setAttribute("og_description", $post->meta_description)
            ->setAttribute("og_image", $post->coverImageUrl())
            ->setAttribute("og_url", $post->detailsUrl())
            ->setAttribute("twitter_card", $post->coverImageUrl())
            ->setAttribute("twitter_image_alt", $post->title)
            ->generate();
    }
}
