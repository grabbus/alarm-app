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
        Schema::create('calls', function (Blueprint $table) {
            $table->id();
            $table->string('caller')->nullable();
            $table->string('caller_phone_number')->nullable();
            $table->string('street');
            $table->string('house_number')->nullable();
            $table->string('city');
            $table->string('zip');
            $table->string('section')->nullable();
            $table->string('object')->nullable();
            $table->string('keyword');
            $table->string('category');
            $table->string('catchword');
            $table->string('priority')->default('1');
            $table->text('note')->nullable();
            $table->dateTime('dispose_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calls');
    }
};
