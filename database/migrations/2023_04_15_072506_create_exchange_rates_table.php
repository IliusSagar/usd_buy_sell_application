<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExchangeRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exchange_rates', function (Blueprint $table) {
            $table->id();
            $table->integer('currency_id_send');
            $table->integer('img_send');
            $table->integer('currency_name_send');
            $table->integer('currency_id_receive');
            $table->integer('img_receive');
            $table->integer('currency_name_receive');
            $table->string('usd');
            $table->string('bdt');
            $table->string('researve');
            $table->string('usdbdt');
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
        Schema::dropIfExists('exchange_rates');
    }
}
