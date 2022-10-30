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
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('stock_code');
            $table->unsignedBigInteger('item_price');
            $table->decimal('number_of_items');
            $table->decimal('total_payment');
            $table->timestamps();

            $table->foreign('stock_code')->references('id')->on('stocks')->onDelete('cascade');
            $table->foreign('item_price')->references('id')->on('stocks')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchases');
    }
};
