<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // public function up()
    // {
    //     Schema::create('comments', function (Blueprint $table) {
    //         $table->id();
    //         $table->text('body');
    //         $table->integer('user_id')->references('id')->on('users')->onDelete('cascade');
    //         $table->integer('tweet_id')->references('id')->on('tweets')->onDelete('cascade');
    //         $table->timestamps();
    //     });
    // }

    public function up()
{
    Schema::create('comments', function (Blueprint $table) {
       $table->increments('id');
       $table->integer('user_id')->unsigned();
       $table->integer('parent_id')->unsigned()->nullable();
       $table->text('body');
       $table->integer('commentable_id')->unsigned();
       $table->string('commentable_type');
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
        Schema::dropIfExists('comments');
    }
}
