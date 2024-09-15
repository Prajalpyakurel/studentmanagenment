<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingsTable extends Migration
{
    public function up()
    {
        Schema::create('trainings', function (Blueprint $table) {
            $table->id();
            $table->string('training_name');
            $table->string('training_photo')->nullable();
            $table->string('training_duration');
            $table->text('training_description');
            $table->string('syllabus_pdf')->nullable();  // PDF file for syllabus
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('trainings');
    }
}
