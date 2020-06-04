<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartmentsApartmentsTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments_apartments_type', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('apartments_id')->unsigned();
            $table->foreign('apartments_id')->references('id')->on('apartments')->onDelete('cascade');
            $table->bigInteger('apartments_type_id')->unsigned();
            $table->foreign('apartments_type_id')->references('id')->on('apartments_type')->onDelete('cascade');
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
        Schema::dropIfExists('apartments_apartments_type');
    }
}
