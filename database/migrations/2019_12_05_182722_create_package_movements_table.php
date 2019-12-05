<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageMovementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_movements', function (Blueprint $table) {
            $table->id('package_movementID');
            $table->bigInteger('packageID');
            $table->bigInteger('haulID');
            $table->timestamps();
            $table->foreign('packageID')
                ->references('packageID')
                ->on('packages')
                ->onDelete('restrict')
                ->onUpdate('cascade');
            $table->foreign('haulID')
                ->references('haulID')
                ->on('hauls')
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
        Schema::dropIfExists('package_movements');
    }
}
