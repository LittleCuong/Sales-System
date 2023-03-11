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
        Schema::create('product_components', function (Blueprint $table) {
            $table->integer('product_id');
            $table->string('product_brand', 100);
            $table->string('product_guarantee', 30);
            $table->string('product_cpu', 255);
            $table->string('product_ram', 255);
            $table->string('product_max_ram', 255);
            $table->string('product_vga', 255);
            $table->string('product_size', 255);
            $table->string('product_panel', 255);
            $table->string('product_resolution', 255);
            $table->string('product_refresh_rate', 60);
            $table->string('product_screen_tech', 255);
            $table->string('product_ssd', 255);
            $table->string('product_sound_tech', 255);
            $table->string('product_connect', 255);
            $table->string('product_keyboard', 255);
            $table->string('product_security', 100);
            $table->string('product_lan', 100);
            $table->string('product_webcam', 100);
            $table->string('product_wifi', 255);
            $table->string('product_bluetooth', 100);
            $table->string('product_weight', 40);
            $table->string('product_battery', 30);
            $table->string('product_os', 30);
            $table->string('product_color', 30);
            $table->string('product_dimension', 100);

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
        Schema::dropIfExists('product_components');
    }
};
