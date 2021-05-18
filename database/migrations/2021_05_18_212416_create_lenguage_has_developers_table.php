<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLenguageHasDevelopersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lenguage_has_developers', function (Blueprint $table) {
            $table->unsignedInteger('idLenguageFK');
            $table->foreign('idLenguageFK')->references('id')->on('lenguages');
            $table->unsignedInteger('idDeveloperFK');
            $table->foreign('idDeveloperFK')->references('id')->on('developers');
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
        Schema::dropIfExists('lenguage_has_developers');
    }
}
