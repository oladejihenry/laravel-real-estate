<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('featured_image');
            $table->string('first_image');
            $table->string('second_image');
            $table->string('third_image');
            $table->string('fourth_image');
            $table->string('slug');
            $table->decimal('price',11,2);
            $table->bigInteger('phone_number')->nullable();
            $table->bigInteger('bathroom')->nullable();
            $table->bigInteger('bed_space')->nullable();
            $table->bigInteger('sqft')->nullable();
            $table->bigInteger('toilet')->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->softDeletes('deleted_at',0);
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
        Schema::dropIfExists('properties');
    }
}
