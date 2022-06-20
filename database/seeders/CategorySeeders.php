<?php

namespace Database\Seeders;

use App\Models\PostCategory;
use Illuminate\Database\Seeder;

class CategorySeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => '1',
                'name' => 'music',
                'is_active' => '0',
                'is_trending' => '0',
                'cat_image' => public_path('public\categoryImages\NewCategory_@echokemedia.com.jpg'),
                'parent_id' => null,
            ],
            [
                'id' => '2',
                'name' => 'music video',
                'is_active' => '0',
                'is_trending' => '0',
                'cat_image' => public_path('public\categoryImages\NewCategory_@echokemedia.com.jpg'),
                'parent_id' => null,
            ],
            [
                'id' => '3',
                'name' => 'funny video',
                'is_active' => '0',
                'is_trending' => '0',
                'cat_image' => public_path('public\categoryImages\NewCategory_@echokemedia.com.jpg'),
                'parent_id' => null,
            ],
        ];

        foreach ($data as $category) {
            PostCategory::create([
                'name' => $category['name']
            ], $category);
        }
    }
}
