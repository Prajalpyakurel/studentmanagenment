<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceiptsTable extends Migration
{
    public function up()
    {
        Schema::create('receipts', function (Blueprint $table) {
            $table->id();
            $table->string('phone'); // Link to the admission's phone number
            $table->decimal('amount_received', 8, 2);
            $table->date('payment_date');
            $table->timestamps();

            // Foreign key to ensure referential integrity
            $table->foreign('phone')->references('phone')->on('admissions')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('receipts');
    }
}


