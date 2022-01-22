<?php

namespace App\Helpers;

use App\Models\Post;

class Sharer
{
    public String $og_url;

    public function setAttribute($name, $value)
    {
        $this->$name = $value;
        return $this;
    }
    static public function blogDetailsPage(Post $post)
    {
        $name =  $post->name;
        return  $name->setAttribute("og_url", $post->detailsUrl())
            ->generate();
    }
    public function detailsUrl(Post $post)
    {
        return route("web.welcome", [
            "id" => $this->id,
            "name" => "name",
            "post" => $post,
        ]);
    }

    public function getLink($platform, $url)
    {
       
        $url = Post::where('id' , $url);
        if ($platform == "facebook") {
            $link = $this->shareOnFacebook($url);
        }
        if ($platform == "instagram") {
            $link = $this->shareOnInstagram($url);
        }
        if ($platform == "whatsapp") {
            $link = $this->shareOnWhatsapp($url);
        }
        return $link;
    }

    public function shareOnFacebook($url)
    {
        return "https://web.facebook.com/sharer.php?u=$url";
    }
    public function shareOnInstagram($url)
    {
        return "https://web.facebook.com/sharer.php?u=$url";
    }

    public function shareOnWhatsapp($url)
    {
        return "https://web.facebook.com/sharer.php?u=$url";
    }
}
