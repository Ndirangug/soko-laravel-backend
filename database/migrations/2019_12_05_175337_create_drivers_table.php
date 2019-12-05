<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->id('driverID');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('national_id', 8);
            $table->string('password');
            $table->enum('sex', ['male', 'female']);
            $table->string('phone', 12)->unique();
            $table->string('county');
            $table->string('town');
            $table->string('photo');
            $table->string('whatsapp')->nullable();
            $table->string('vehicle_reg_number');
            $table->enum('vehicle_type', ['saloon', 'station_wagon', 'van', 'small_truck', 'big_truck']);
            $table->string('vehicle_description', 1000);
            $table->string('vehicle_photo');
            $table->bigInteger('shipperID');
            $table->rememberToken()->nullable();
            $table->timestamps();
            $table->foreign('shipperID')
                ->references('shipperID')
                ->on('shippers')
                ->onUpdate('cascade')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drivers');
    }
}
