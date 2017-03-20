<?php

  use Illuminate\Database\Schema\Blueprint;
  use Illuminate\Database\Migrations\Migration;

  class CreatePostsTable extends Migration {

      /**
       * Run the migrations.
       *
       * @return void
       */
      public function up()
      {
          Schema::create('posts', function($table){
              $table->increments('id');
              $table->string('title');
              $table->string('cat_id');
              $table->text('content');
              $table->unsignedInteger('comment_count');
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
          Schema::drop('posts');
      }

  }