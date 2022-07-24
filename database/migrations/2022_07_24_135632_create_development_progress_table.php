<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevelopmentProgressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('development_progress', function (Blueprint $table) {
            $table->id();
            $table->string('step');
            $table->string('progress_date');
            $table->string('target_completed');
            $table->string('start_development');
            $table->string('progress');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('sale_id');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('sale_id')->references('id')->on('sales')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('development_progress');
    }
}
