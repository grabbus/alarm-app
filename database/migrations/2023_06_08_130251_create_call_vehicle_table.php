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
        Schema::create('calls_vehicles', function (Blueprint $table) {
            $table->id();

            $table->foreignId('call_id')
                ->references('id')
                ->on('calls');
            $table->foreignId('vehicle_id')
                ->references('id')
                ->on('vehicles')
                ->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('call_vehicle');
    }
};
