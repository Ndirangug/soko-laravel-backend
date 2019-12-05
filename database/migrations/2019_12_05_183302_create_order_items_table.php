<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id('order_itemID');
            $table->integer('price');
            $table->integer('rating')->default(0);
            $table->string('review', 1000)->nullable();
            $table->enum('order_status', ['pending', 'waiting to fulfil', 'waiting to ship', 'shipping', 'delivered', 'cancelled', 'returned', 'complete']);
            $table->bigInteger('productID');
            $table->bigInteger('orderID');
            $table->bigInteger('packageID');
            $table->timestamps();
            $table->foreign('packageID')
                ->references('packageID')
                ->on('packages')
                ->onDelete('restrict')
                ->onUpdate('cascade');
            $table->foreign('orderID')
                ->references('orderID')
                ->on('orders')
                ->onDelete('restrict')
                ->onUpdate('cascade');
            $table->foreign('productID')
                ->references('productID')
                ->on('products')
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
        Schema::dropIfExists('order_items');
    }
}
