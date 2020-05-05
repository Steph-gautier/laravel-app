<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('brandname');
            $table->string('version');
            $table->string('matriculationNbr')->unique;
            $table->string('color');
            /*$table->integer('deviceId')->unique;
            $table->string('lastposition');
            $table->string('subcribedPlan');
            $table->integer('distance');
            $table->string('addedvia');*/
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
        Schema::dropIfExists('vehicles');
    }
}
