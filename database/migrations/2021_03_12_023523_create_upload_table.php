<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUploadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upload', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('simulation_id');
            $table->unsignedBigInteger('inject_id');
            $table->foreign('simulation_id')->references('id')->on('simulations');
            $table->foreign('inject_id')->references('id')->on('inject');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('upload');
    }
}
