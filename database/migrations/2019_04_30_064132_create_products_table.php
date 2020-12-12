<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->Increments('ID');
            $table->string('pName')->nullable();
            $table->string('color')->nullable();
            $table->string('size')->nullable();
            $table->string('boxID');
            $table->integer('quantity');
            $table->integer('price')->default(0);;
            $table->integer('availableQty')->default(0);
            $table->integer('styleID');
            $table->integer('brandID');
            $table->string('cName')->nullable();
            $table->integer('phone');
            $table->string('status')->nullable();
            $table->string('mp')->nullable();
            $table->string('remark')->nullable();
            $table->integer('cprice')->default(0);;
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
        Schema::dropIfExists('products');
    }
}
