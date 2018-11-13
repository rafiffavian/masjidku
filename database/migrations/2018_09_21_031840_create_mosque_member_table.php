<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMosqueMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mosque_member', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_mosque')->unsigned()->comment('ID masjid dari table mosque');
            $table->string('name',100);
            $table->string('position',100);
            $table->string('phone',15)->nullable();
            $table->string('email',100)->nullable();
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
        Schema::dropIfExists('mosque_member');
    }
}
