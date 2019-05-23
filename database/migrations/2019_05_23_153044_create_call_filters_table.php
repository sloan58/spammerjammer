<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCallFiltersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('call_filters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('from_number');
            $table->string('to_number');
            $table->unsignedBigInteger('ucms_id');
            $table->timestamps();

            $table->foreign('ucms_id')->references('id')->on('ucms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('call_filters');
    }
}
