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
            $table->unsignedBigInteger('user_id')->default(1)->contrained()->onDelete('cascade');
            $table->unsignedBigInteger('category_id')->default(1)->contrained()->onDelete('cascade');
            $table->string('cover_image');
            $table->string('cover_video');
            $table->string('name');
            $table->enum('type' , ["Blog" , "Vlog"]);
            $table->text('content_desccription');
            // $table->string('slug');
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
        Schema::dropIfExists('posts');
    }
}
