<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id('paymentID');
            $table->integer('amount');
            $table->string('paid_by');
            $table->enum('mode_of_payment', ['mpesa', 'bank', 'cash', 'bonga', 'visa', 'mastercard', 'airtel_money', 'tkash', 'wallet']);
            $table->bigInteger('orderID');
            $table->timestamps();
            $table->foreign('orderID')
                ->references('orderID')
                ->on('orders')
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
        Schema::dropIfExists('payments');
    }
}
