<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLevelLangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('level_langs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('level_lang','100');
            $table->unsignedInteger('idLenguageFK');
            $table->foreign('idLenguageFK')->references('id')->on('lenguages');
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
        Schema::dropIfExists('level_langs');
    }
}
