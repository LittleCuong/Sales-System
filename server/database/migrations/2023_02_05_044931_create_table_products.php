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
        Schema::create('product', function (Blueprint $table) {
            $table->integer('product_id')->primary();
            $table->string('product_name', 200);
            $table->string('product_image', 200);
            $table->string('product_unit', 100);
            $table->integer('product_current_price');
            $table->integer('product_available');
            $table->integer('trademark_id');
            $table->integer('inventory_id');
            $table->timestamp('created_on'); 
            
            $table->foreign('trademark_id')->references('trademark_id')->on('trademark');
            $table->foreign('inventory_id')->references('inventory_id')->on('inventory');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
};
