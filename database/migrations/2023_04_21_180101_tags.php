<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_tags', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('title');
            $table->string('banner_image')->nullable();
            $table->string('description', 1000)->nullable();
            $table->string('tags', 1000)->nullable();
            $table->string('intro', 1000)->nullable();
        });
        Schema::create('new_post_tags', function (Blueprint $table) {
            $table->integer('post_id');
            $table->integer('tag_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('new_tags');
        Schema::dropIfExists('new_post_tags');
    }
};
