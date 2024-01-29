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
        Schema::create('online_assessment_jobs_models', function (Blueprint $table) {
            $table->id();
            $table->text('job-name')->nullable();
            $table->text('work-experience')->nullable();
            $table->text('employment-period')->nullable();
            $table->text('management-experience')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('online_assessment_jobs_models');
    }
};
