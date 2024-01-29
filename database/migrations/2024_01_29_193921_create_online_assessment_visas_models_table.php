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
        Schema::create('online_assessment_visas_models', function (Blueprint $table) {
            $table->id();
            $table->text('visas')->nullable();
            $table->text('type-visa')->nullable();
            $table->text('enter-date')->nullable();
            $table->text('exit-date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('online_assessment_visas_models');
    }
};
