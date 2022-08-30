<?php

namespace Database\Factories;

use App\Helpers\Constants;
use App\Models\Post;
use App\Models\PostCategory;
use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\Factory;
use PhpParser\Node\Stmt\Catch_;
use Illuminate\Support\Str;

class PostFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var sentence
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $categories = PostCategory::get();
        $id = range(1, 5);
        shuffle($id);
        foreach ($categories as $category) {
            $cat_id = array_pop($id);
            return $cat_id;
        }
        $allowedTypes = Constants::MUSIC;
        // $allowedTypes = Constants::VIDEO;
        return [

            // 'user_id' => 1,
            // 'category_id' => 1,
            // $title = 'name' => $this->faker->sentence,
            // 'content_desccription' => $this->faker->text($maxNBChars = 300),
            // "type" => $allowedTypes,
            // 'cover_image' => public_path('/categoryImages\@ echokemedia.com.jpg'),
            // "cover_video" => public_path('/postVideos\61f2d4d4c0814.mp4'),
            // "meta_title" => $this->faker->sentence,
            // "meta_keywords" => $this->faker->sentence,
            // "meta_description" => $this->faker->sentence,
            // 'slug' => Str::slug($title, '-'),
            // "is_sponsored" =>  Constants::ACTIVE,
            // "is_top_story" =>  Constants::ACTIVE,
            // "is_featured" =>  Constants::ACTIVE,
            // "is_published" =>  Constants::ACTIVE,
            // "can_comment" =>  Constants::ACTIVE,
            // 'created_at' => Now(),
            // "deleted_at" => Now(),
 
        //     'user_id' => 1,
        //     'category_id' => 1,
        //    'name' => $this->faker->sentence,
        //     'content_desccription' => $this->faker->text($maxNBChars = 300),
        //     "type" => $allowedTypes,
        //     'cover_image' => public_path('/categoryImages\@ echokemedia.com.jpg'),
        //     "cover_music" => public_path('/postMusic\625ee9450a0b1.mp3'),
        //     "meta_title" => $this->faker->sentence,
        //     "meta_keywords" => $this->faker->sentence,
        //     "meta_description" => $this->faker->sentence,
        //     'slug' => Str::slug($this->faker->sentence ,'-'),
        //     "is_sponsored" =>  Constants::ACTIVE,
        //     "is_top_story" =>  Constants::ACTIVE,
        //     "is_featured" =>  Constants::ACTIVE,
        //     "is_published" =>  Constants::ACTIVE,
        //     "can_comment" =>  Constants::ACTIVE,
        //     'created_at' => Now(),
        //     "deleted_at" => Now(),
        ];
    }
}
