<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnalsisResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analsis_results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('appointment_id')->constrained('appointments','id')->onDelete('cascade');
            $table->foreignId('medical_analysis_id')->constrained('medical_analysis','id')->onDelete('cascade');
            $table->string('img',100);
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
        Schema::dropIfExists('analsis_results');
    }
}
