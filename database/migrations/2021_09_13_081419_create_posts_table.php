<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->constrained('users');
            $table->unsignedBigInteger('category_id')->constrained('post_categories')->nullable();
            $table->string('cover_image');
            $table->string('cover_music')->nullable()->default('0');
            $table->string('cover_video')->nullable()->default('0');
            $table->string('name');
            $table->string('type');
            $table->text('content_desccription');
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('access_level')->default("All");
            $table->string('slug');
            $table->tinyInteger('is_top_story')->default(0);
            $table->tinyInteger('is_featured')->default(0);
            $table->tinyInteger('is_published')->default(0);
            $table->tinyInteger('can_comment')->default(1);
            $table->tinyInteger('is_sponsored')->default(0);
            $table->timestamps();
            $table->softDeletes();
            $table->integer('views_count')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
