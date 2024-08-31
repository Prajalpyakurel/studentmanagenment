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
            $table->string('payment_method')->default('cash'); // Add payment method (cash/bank)
            $table->string('bank_name')->nullable(); // Add bank name if payment_method is bank
            $table->string('transaction_id')->nullable(); // Add transaction ID if payment_method is bank
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


