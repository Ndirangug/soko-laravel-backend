<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;

class CreateHaulsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hauls', function (Blueprint $table) {
            $table->id('haulID');
            $table->json('pickup');
            $table->json('destination');
            $table->dateTime('begin_time')->default(Carbon::now());
            $table->dateTime('end_time')->nullable();
            $table->bigInteger('driverID');
            $table->timestamps();
            $table->foreign('driverID')
                ->references('driverID')
                ->on('drivers')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hauls');
    }
}
