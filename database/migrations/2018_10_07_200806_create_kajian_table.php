<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKajianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kajian', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_mosque')->unsigned();
            $table->string('pengisi_acara',100);
            $table->string('tema',100);
            $table->string('kategori',100);
            $table-> date('date')->nullable();
            $table->timestamps();

            $table->foreign('id_mosque')->references('id')->on('masjidku');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kajian');
    }
}
