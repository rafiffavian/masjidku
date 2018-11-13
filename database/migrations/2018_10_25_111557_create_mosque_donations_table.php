<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMosqueDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mosque_donations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_mosque')->unsigned();
            $table->bigInteger('id_master_donations')->unsigned();
            $table->bigInteger('minimal');
            $table->text('keterangan');
            $table->enum('status',['aktif','tidak aktif']);
            $table->timestamps();

            $table->foreign('id_mosque')->references('id')->on('masjidku');
            $table->foreign('id_master_donations')->references('id')->on('master_donations'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mosque_donations');
    }
}
