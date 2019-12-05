<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers', function (Blueprint $table) {
            $table->id('sellerID');
            $table->string('seller_name');
            $table->string('email')->unique();
            $table->string('profile_description', 2000);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('address_line1');
            $table->string('address_line2');
            $table->string('address_line3');
            $table->string('phone', 12);
            $table->string('county');
            $table->string('town');
            $table->string('photo');
            $table->string('facebook_url');
            $table->string('twitter_url');
            $table->string('instagram_url');
            $table->string('whatsapp');
            $table->string('pinterest_url');
            $table->rememberToken();
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
        Schema::dropIfExists('sellers');
    }
}
