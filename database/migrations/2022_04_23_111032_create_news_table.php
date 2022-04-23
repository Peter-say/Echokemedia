<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->constrained('users');
            $table->unsignedBigInteger('category_id')->constrained('post_categories');
            $table->string('cover_image');
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
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
