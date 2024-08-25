<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdmissionIdToReceiptsTable extends Migration
{
    public function up()
    {
        Schema::table('receipts', function (Blueprint $table) {
            // Comment or remove this line if column already exists
            // $table->unsignedBigInteger('admission_id')->after('id');
        });
    }

    public function down()
    {
        Schema::table('receipts', function (Blueprint $table) {
            $table->dropColumn('admission_id');
        });
    }
}

