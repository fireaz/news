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
        Schema::create('new_catalogs', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('title');
            $table->string('banner_image')->nullable();
            $table->string('description', 1000)->nullable();
            $table->string('tags', 1000)->nullable();
            $table->string('intro', 1000)->nullable();
            $table->boolean('is_active')->nullable();
            $table->timestamps();
        });
        Schema::create('new_catalog_posts', function (Blueprint $table) {
            $table->integer('catalog_id');
            $table->integer('post_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('new_catalogs');
        Schema::dropIfExists('new_catalog_posts');
    }
};
