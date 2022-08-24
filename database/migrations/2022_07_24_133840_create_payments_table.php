<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('pay_type');
            $table->string('amount');
            $table->date('date');
            $table->string('proof');
            $table->unsignedBigInteger('bank_id');
            $table->string('status');
            $table->unsignedBigInteger('sale_id');
            $table->timestamps();
            $table->foreign('sale_id')->references('id')->on('sales')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('bank_id')->references('id')->on('banks')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
