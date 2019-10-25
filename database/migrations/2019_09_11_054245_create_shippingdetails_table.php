<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShippingdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shippingdetails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('billing_address');
            $table->string('country');
            $table->string('county');
            $table->string('area');
            $table->string('delivery_address');
            $table->string('phone');
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
        Schema::dropIfExists('shippingdetails');
    }
}
