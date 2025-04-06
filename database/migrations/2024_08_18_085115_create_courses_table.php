<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->text('Category')->nullable();
            $table->integer('duration'); // Duration in hours or weeks
            $table->integer('availableSeat');
            $table->integer('totalSeat');
            $table->decimal('price', 8, 2)->nullable(); // Price with 2 decimal places
            $table->string('pdf_path')->nullable(); // Column to store PDF file path
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
