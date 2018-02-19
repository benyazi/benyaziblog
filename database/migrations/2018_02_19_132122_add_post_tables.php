<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPostTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 255);
            $table->text('intro')->nullable();
            $table->string('slug', 150);
            $table->string('type', 15)->nullable();
            $table->text('content')->nullable();
            $table->string('status', 50);
            $table->dateTime('published_at')->nullable();
            $table->timestamps();

            $table->index(['title','published_at','type', 'status']);
            $table->unique('slug');
        });

        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->unsignedInteger('parent_id')->nullable();
            $table->unsignedInteger('used_count')->default(0);
            $table->timestamps();

            $table->index('name');
            $table->index('parent_id');
            $table->index('used_count');
            $table->unique('name','unique_name');
        });

        Schema::create('post_tag', function (Blueprint $table) {
            $table->unsignedInteger('post_id');
            $table->unsignedInteger('tag_id');
            $table->unique(['post_id','tag_id']);
            $table->primary(['post_id','tag_id']);
            $table->foreign('post_id')->references('id')->on('post_items');
            $table->foreign('tag_id')->references('id')->on('tags');
        });

        Schema::table('career_items', function (Blueprint $table) {
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
        Schema::dropIfExists('post_tag');
        Schema::dropIfExists('tags');
        Schema::dropIfExists('post_items');
        Schema::table('career_items', function (Blueprint $table) {
            $table->dropTimestamps();
        });
    }
}
