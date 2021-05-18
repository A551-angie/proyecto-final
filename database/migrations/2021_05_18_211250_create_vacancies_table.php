<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title','200');
            $table->string('experinceRequired','50');
            $table->float('salary', 8,2);
            $table->string('location','200');
            $table->string('currency','200');
            $table->mediumText('descriptionVacancy');
            $table->string('state','1');
            $table->date('endDate');
            $table->unsignedInteger('idCategoryVacancyFK');
            $table->foreign('idCategoryVacancyFK')->references('id')->on('category_vacancies');
            $table->unsignedInteger('idRecruiterFK');
            $table->foreign('idRecruiterFK')->references('id')->on('recruiters');
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
        Schema::dropIfExists('vacancies');
    }
}
