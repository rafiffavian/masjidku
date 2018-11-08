<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_mosque')->unsigned();
            $table->bigInteger('id_finance_type')->unsigned();
            $table->bigInteger('amount')->unsigned()->default(0);
            $table->string('description')->nullable();
            $table->timestamps();

            $table->foreign('id_mosque')->references('id')->on('masjidku');
            $table->foreign('id_finance_type')->references('id')->on('finance_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('finances');
    }
}
