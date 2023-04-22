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
        Schema::create('new_pages', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('title');
            $table->string('link_ref')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('description', 1000)->nullable();
            $table->string('tags', 1000)->nullable();
            $table->json('data')->nullable();
            $table->string('summary', 1000)->nullable();
            $table->longText('content')->nullable();
            $table->smallInteger('content_type')->nullable();
            $table->longText('data_prev')->nullable();
            $table->integer('level_data')->nullable()->default(0);
            $table->integer('view_count')->nullable()->default(0);
            $table->integer('rate_number')->nullable()->default(0);
            $table->dateTime('publish_at')->nullable();
            $table->boolean('is_active')->nullable();
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
        Schema::dropIfExists('');
    }
};
