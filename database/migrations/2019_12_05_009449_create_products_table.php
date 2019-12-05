<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('productID');
            $table->string('title');
            $table->string('description_summary', 2000);
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->string('image4');
            $table->string('image5');
            $table->double('price');
            $table->integer('rating')->default(0);
            $table->string('specifications_document');
            $table->string('description_document');
            $table->string('sku');
            $table->json('variation')->nullable();
            $table->json('offer_type')->nullable(); // percentage or real value
            $table->double('offer_amount')->nullable();
            $table->enum('shipping_from', ['local', 'inhouse', 'abroad']); //local inhouse or abroad
            $table->string('brand')->default('generic');
            $table->bigInteger('sellerID');
            $table->timestamps();
            $table->foreign('sellerID')
                ->references('sellerID')
                ->on('sellers')
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
        Schema::dropIfExists('products');
    }
}
