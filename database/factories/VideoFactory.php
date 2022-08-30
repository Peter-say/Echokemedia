<?php

namespace Database\Factories;

use App\Helpers\Constants;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $allowedTypes = Constants::MUSIC;
        return [
            'category_id' => "required|string",
            'name' => $this->faker->string(50),
            'content_desccription' => $this->faker->string(300 ),
            "type" => "required|string|in:$allowedTypes",
            'cover_image' => public_path('/categoryImages\@ echokemedia.com.jpg'),
            "cover_video" => public_path('/postVideos\61f2d4d4c0814.mp4'),
            "meta_title" => $this->faker->string(50),
            "meta_keywords" => $this->faker->string(20),
            "meta_description" => $this->faker->string(150),
            "is_sponsored" =>  Constants::ACTIVE,
            "is_top_story" =>  Constants::ACTIVE, 
            "is_featured" =>  Constants::ACTIVE,
            "is_published" =>  Constants::ACTIVE,
            "can_comment" =>  Constants::ACTIVE,  
        ];
    }
}
