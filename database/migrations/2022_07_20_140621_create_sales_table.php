<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('payment_type');
            $table->date('transaction_date');
            $table->string('ktp');
            $table->string('npwp');
            $table->string('status');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('housing_id');
            $table->unsignedBigInteger('lot_id');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('housing_id')->references('id')->on('housings')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('lot_id')->references('id')->on('lots')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
