<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillsHasDevelopersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills_has_developers', function (Blueprint $table) {
            $table->unsignedInteger('idSkillFK');
            $table->foreign('idSkillFK')->references('id')->on('skulls');
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
        Schema::dropIfExists('skills_has_developers');
    }
}
