<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->Integer('order_id');
            $table->float('net_amount');
            $table->integer('tax');
            $table->float('gross_amount');
            $table->longText('biling_address');
            $table->unsignedBigInteger('biling_country_id');
            $table->unsignedBigInteger('biling_state_id');
            $table->unsignedBigInteger('biling_city_id');
            $table->longText('shipping_address');
            $table->unsignedBigInteger('shipping_country_id');
            $table->unsignedBigInteger('shipping_state_id');
            $table->unsignedBigInteger('shipping_city_id');
            $table->enum('transaction_status',['Completed','Processing','Failed','Pending']);
            $table->string('bank_response_code',161);
            $table->enum('package_status',['Completed','Processing stock','Ready For Packing','Deliverd','Received']);
            $table->date('transaction_date');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            // $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('biling_country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->foreign('biling_state_id')->references('id')->on('states')->onDelete('cascade');
            $table->foreign('biling_city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->foreign('shipping_country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->foreign('shipping_state_id')->references('id')->on('states')->onDelete('cascade');
            $table->foreign('shipping_city_id')->references('id')->on('cities')->onDelete('cascade');
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
        Schema::dropIfExists('orders');
    }
};
