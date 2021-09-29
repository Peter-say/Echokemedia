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
            $table->string('status')->default("Pending");
            $table->string('cover_image');
            $table->string('cover_video');
            $table->string('name');
            $table->string('content_type');
            $table->text('content_desccription');
            $table->timestamps();
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
