<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevelopersHasVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('developers_has_vacancies', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idVacancyFK');
            $table->foreign('idVacancyFK')->references('id')->on('vacancies');
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
        Schema::dropIfExists('developers_has_vacancies');
    }
}
