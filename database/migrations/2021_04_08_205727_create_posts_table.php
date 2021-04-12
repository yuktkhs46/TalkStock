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
            $table->id('id');
            $table->integer('post_status')->default('2');
            $table->string('title');
            $table->integer('category_id');
            $table->string('time')->nullable();
            $table->string('place')->nullable();
            $table->string('content')->nullable();
            $table->string('punchline')->nullable();
            $table->integer('user_id');
          
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
