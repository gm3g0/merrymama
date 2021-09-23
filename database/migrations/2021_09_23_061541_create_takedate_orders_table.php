<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTakedateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('takedate_orders', function (Blueprint $table) {
            $table->date('tekedate_time');
            $table->integer('totle');
            $table->integer('order_count');

            $table->primary('tekedate_time');
            $table->foreign('tekedate_time')->references('tekedate_time')->on('takedates');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('takedate_orders');
    }
}
