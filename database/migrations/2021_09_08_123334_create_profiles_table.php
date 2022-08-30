<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->constrained('users');
            $table->string('avatar')->nullable();
            $table->text('location')->default('');
            $table->string('linkedin_username');
            $table->string('facebook_username');
            $table->string('twitter_username');
            $table->string('github_username');
            $table->string('phone')->default(0);
            $table->enum('role' , ['Student' , 'Self_employed' , 'Employed'])->default('Student');
            $table->text('description')->default('');
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
        Schema::dropIfExists('profiles');
    }
}
