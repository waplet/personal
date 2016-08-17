<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ImageRefactor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title');
            $table->string('extension', 10);
        });

        Schema::create('product_images', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('image_id');
            $table->index('image_id');
            $table->integer('product_id');
            $table->index('product_id');
        });

        /**
         * TODO: Code for later
         */
        Schema::create('project_images', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('image_id');
            $table->index('image_id');
            $table->integer('product_id');
            $table->index('product_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_images');
        Schema::dropIfExists('product_images');
        Schema::dropIfExists('images');
    }
}
