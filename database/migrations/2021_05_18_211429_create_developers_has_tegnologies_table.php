<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevelopersHasTegnologiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('developers_has_tegnologies', function (Blueprint $table) {
            $table->unsignedInteger('idDeveloperFK');
            $table->foreign('idDeveloperFK')->references('id')->on('developers');
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
        Schema::dropIfExists('developers_has_tegnologies');
    }
}
