<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('units', function (Blueprint $table) {
            $table->unsignedBigInteger('budget_id')->nullable()->after('amount');
            $table->foreign('budget_id')->references('id')->on('budgets')->onDelete('cascade');
            $table->string('amount_from')->default(0)->after('budget_id');
            $table->string('amount_to')->default(0)->after('amount_from');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('units', function (Blueprint $table) {
            $table->dropForeign('budget_id');
            $table->dropColumn(['budget_id','amount_from','amount_to']);
        });
    }
};
