<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_files', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('patient_id');
            $table->string('file_name');
            $table->string('file_path');
            $table->string('file_type');
            $table->string('file_size');
            $table->unsignedInteger('employee_id');
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
        Schema::dropIfExists('patient_files');
    }
}
