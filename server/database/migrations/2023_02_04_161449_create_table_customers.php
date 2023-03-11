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
        Schema::create('customer', function (Blueprint $table) {
            $table->integer('customer_id')->primary();
            $table->string('customer_name', 100);
            $table->string('customer_email', 100);
            $table->string('password', 255);
            $table->string('customer_gender', 30);
            $table->date('customer_date_of_birth', 100);
            $table->integer('customer_point');
            $table->timestamp('created_on');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer');
    }
};
