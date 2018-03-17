<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderVariantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_variants', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('order_id');
            $table->bigInteger('product_id');
            $table->bigInteger('variant_id')->unsigned();
            $table->integer('price');
            $table->integer('quantity');
            $table->string('sku');
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
        Schema::dropIfExists('order_variants');

    }
}
