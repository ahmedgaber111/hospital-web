<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportMedicineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_medicine', function (Blueprint $table) {
            $table->id();
            $table->foreignId('report_id')->constrained('reports','id')->onDelete('cascade');
            $table->foreignId('medicine_id')->constrained('medicines','id')->onDelete('cascade');
            $table->integer('intake_interval');
            $table->string('medicine_type',100);
            $table->string('dosage',100);
            $table->date('Start_Take');
            $table->date('End_Take');
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
        Schema::dropIfExists('report_medicine');
    }
}
