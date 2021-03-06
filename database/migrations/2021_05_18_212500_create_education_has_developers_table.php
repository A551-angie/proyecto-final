<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationHasDevelopersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_has_developers', function (Blueprint $table) {
            $table->unsignedInteger('idEducationFK');
            $table->foreign('idEducationFK')->references('id')->on('education');
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
        Schema::dropIfExists('education_has_developers');
    }
}
