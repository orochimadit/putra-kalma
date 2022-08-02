<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKprsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kprs', function (Blueprint $table) {
            $table->id();
            $table->string('loan_amount');
            $table->string('range_time');
            $table->string('bank_interest');
            $table->string('installment');
            $table->unsignedBigInteger('bank_id');
            
            $table->timestamps();
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
        Schema::dropIfExists('kprs');
    }
}
