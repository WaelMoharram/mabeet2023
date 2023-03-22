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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('season_id');
            $table->string('name');
            $table->mediumText('description');
            $table->unsignedBigInteger('distance_id');
            $table->unsignedInteger('distance_from');
            $table->unsignedInteger('distance_to');
            $table->unsignedBigInteger('unit_type_id');
            $table->unsignedInteger('unit_number');
            $table->unsignedInteger('guest_number');
            $table->unsignedBigInteger('budget_id');
            $table->unsignedInteger('budget_from');
            $table->unsignedInteger('budget_to');
            $table->boolean('is_reviewed')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
