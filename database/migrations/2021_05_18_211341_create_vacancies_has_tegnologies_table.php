<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacanciesHasTegnologiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies_has_tegnologies', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idVacancyFK');
            $table->foreign('idVacancyFK')->references('id')->on('vacancies');
            $table->unsignedInteger('idTegnologyFK');
            $table->foreign('idTegnologyFK')->references('id')->on('tegnologies');
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
        Schema::dropIfExists('vacancies_has_tegnologies');
    }
}
