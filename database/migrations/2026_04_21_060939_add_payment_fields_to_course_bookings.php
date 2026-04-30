<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('course_bookings', function (Blueprint $table) {
            // Drop the old user_id NOT NULL constraint if needed - make it nullable
            // (some bookings come from guests before login)
            $table->foreignId('user_id')->nullable()->change();

            // eSewa payment fields
            $table->enum('payment_method', ['esewa', 'cash', 'bank'])->default('cash')->after('status');
            $table->enum('payment_status', ['unpaid', 'paid', 'failed', 'refunded'])->default('unpaid')->after('payment_method');
            $table->string('esewa_transaction_uuid')->nullable()->after('payment_status');
            $table->string('esewa_ref_id')->nullable()->after('esewa_transaction_uuid');
            $table->decimal('amount_paid', 10, 2)->nullable()->after('esewa_ref_id');
            $table->timestamp('paid_at')->nullable()->after('amount_paid');
        });
    }

    public function down(): void
    {
        Schema::table('course_bookings', function (Blueprint $table) {
            $table->dropColumn([
                'payment_method',
                'payment_status',
                'esewa_transaction_uuid',
                'esewa_ref_id',
                'amount_paid',
                'paid_at',
            ]);
        });
    }
};
