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
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('stock_code');
            $table->unsignedBigInteger('item_price');
            $table->integer('number_of_items');
            $table->decimal('total_payment');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('stock_code')->references('id')->on('stocks')->onDelete('cascade');
           // $table->foreign('item_price')->references('id')->on('stocks')->onDelete('cascade');

            


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
