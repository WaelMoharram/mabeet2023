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
        Schema::table('orders', function (Blueprint $table) {
            $table->unsignedBigInteger('distance_id')->nullable()->change();
            $table->unsignedBigInteger('budget_id')->nullable()->change();
            $table->integer('distance_from')->nullable()->change();
            $table->integer('distance_to')->nullable()->change();
            $table->integer('budget_from')->nullable()->change();
            $table->integer('budget_to')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->unsignedBigInteger('distance_id')->change();
            $table->unsignedBigInteger('budget_id')->change();
            $table->integer('distance_from')->change();
            $table->integer('distance_to')->change();
            $table->integer('budget_from')->change();
            $table->integer('budget_to')->change();
        });
    }
};
