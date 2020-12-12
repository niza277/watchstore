<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockPurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_purchases', function (Blueprint $table) {
            $table->increments('ID');
            $table->integer('availableStock')->default(0);
            $table->integer('price')->default(0);
            $table->integer('boxID');
            $table->integer('supplyerID');
            $table->integer('statusPaid')->default(-1);
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
        Schema::dropIfExists('stock_purchases');
    }
}
