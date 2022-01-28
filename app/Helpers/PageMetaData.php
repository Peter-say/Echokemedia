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

    static public function indexPage()
    {
        $meta = new MetaData();
        return $meta->setAttribute("name", self::getTitle("Home"))
            ->setAttribute("description", "Welcome to Echokemedia")
            ->setAttribute("keywords", self::DEFAULT_KEYWORDS)
            ->setAttribute("username", "Peter" ?? "Peace")
            ->setAttribute("audience", "Public")
            ->generate();
    }

    static public function contactPage()
    {
        $meta = new MetaData();

        return $meta->setAttribute("title", self::getTitle("Contact Us"))
            ->setAttribute("description", "Rapid contacts")
            ->setAttribute("keywords", self::DEFAULT_KEYWORDS)
            ->setAttribute("username", "Peter" ?? "Peace")
            ->setAttribute("audience", "Public")
            ->generate();
            
    }
    static public function about()
    {
        $meta = new MetaData();

        return $meta->setAttribute("name", self::getTitle("About Us"))
            ->setAttribute("description", "About us")
            ->setAttribute("keywords", self::DEFAULT_KEYWORDS)
            ->setAttribute("username", "Peter" ?? "Peace")
            ->setAttribute("audience", "Public")
            ->generate();
            
    }

    static public function blogPage($type)
    {
        $meta = new MetaData();
        return $meta->setAttribute("name", self::getTitle(ucfirst($type)))
            ->setAttribute("description", "Blog descrpition")
            ->setAttribute("keywords", self::DEFAULT_KEYWORDS)
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

    static public function blogDetailsPage(Post $post)
    {
        $meta = new MetaData();
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
