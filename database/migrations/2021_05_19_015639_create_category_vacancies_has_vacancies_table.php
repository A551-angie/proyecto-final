<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryVacanciesHasVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_vacancies_has_vacancies', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idVacancyFK');
            $table->foreign('idVacancyFK')->references('id')->on('vacancies');
            $table->unsignedInteger('idtegnologyFK');
            $table->foreign('idtegnologyFK')->references('id')->on('tegnologies');
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
        Schema::dropIfExists('category_vacancies_has_vacancies');
    }
}