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
        Schema::create('invoice_detail', function (Blueprint $table) {
            $table->integer('invoice_serial');
            $table->integer('customer_id');
            $table->integer('product_id');
            $table->integer('quantity');
            $table->string('price');

            $table->foreign('invoice_serial')->references('invoice_serial')->on('invoice');
            $table->foreign('customer_id')->references('customer_id')->on('customer');
            $table->foreign('product_id')->references('product_id')->on('product');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice_detail');
    }
};
