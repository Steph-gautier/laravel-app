<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vehicle_id');
            $table->foreign('vehicle_id')->references('id')->on('vehicles');
            $table->string('deviceID')->unique;
            $table->float('latitude')->nullable();
            $table->float('longitude')->nullable();
            $table->float('speed')->nullable();
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
        Schema::create('devices', function (Blueprint $table) {
            $table->dropForeign(['vehicle_id']); // drop the foreign key.
            $table->dropColumn('vehicle_id'); // drop the column
        });
    }
}
