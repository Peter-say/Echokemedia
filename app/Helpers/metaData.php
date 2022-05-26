<?php
namespace App\Helpers;

class MetaData{

    public String $title;
    public String $description;
    public String $keywords;
    public String $author;
    public String $publisher;
    public String $copyright;
    public String $page_topic;
    public String $page_type;
    public String $audience;

    // <!__  Essential META Tags __>
    public String $og_site_name;
    public String $og_title;
    public String $og_description;
    public String $og_image;
    public String $og_url;
    public String $twitter_card;
    public String $twitter_image_alt;

    public function setAttribute($name , $value){
        $this->$name = $value;
        return $this;
    }

    public function generate(){
        $object_array = (array) $this;

        $class_variables =  get_class_vars(get_class($this));
        $merged_data = [];

        foreach ($class_variables as $key => $value) {
            $merged_data[$key] = $object_array[$key] ?? null;
        }

        return $merged_data;
    }
}

