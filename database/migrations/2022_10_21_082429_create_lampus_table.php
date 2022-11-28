<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLampusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lampus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cairs_id');
            $table->foreign('cairs_id')->references('id')->on('cairs');
            $table->string('nama');
            $table->string('nomor_hp');
            $table->string('PLN');
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
        Schema::dropIfExists('lampus');
    }
}
