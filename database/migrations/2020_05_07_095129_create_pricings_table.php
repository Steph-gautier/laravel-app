<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pricings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('subscribedPlan');
            $table->date('remaining_time');
            $table->datetime('last_subscription');
            $table->integer('nbr_subscription');
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
        Schema::create('pricings', function (Blueprint $table) {
            $table->dropForeign(['user_id']); // drop the foreign key.
            $table->dropColumn('user_id'); // drop the column
        });
    }
}
