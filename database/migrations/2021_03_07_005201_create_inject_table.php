<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inject', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('filename');
            $table->decimal('release_time');
            $table->decimal('end_time');
            $table->string('box');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inject');
    }
}
