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
        Schema::create('online_assessment_models', function (Blueprint $table) {
            $table->id();
            $table->text('fnamelname')->nullable();
            $table->text('age')->nullable();
            $table->text('status')->nullable();
            $table->text('location')->nullable();
            $table->text('en-level')->nullable();
            $table->text('en-score')->nullable();
            $table->text('fr-level')->nullable();
            $table->text('fr-score')->nullable();
            $table->text('field-study')->nullable();
            $table->text('academic-orientation')->nullable();
            $table->text('edu-gap')->nullable();
            $table->text('business-license')->nullable();
            $table->text('cash-assets')->nullable();
            $table->text('non-cash-assets')->nullable();
            $table->text('migration-method')->nullable();
            $table->text('get-know')->nullable();
            $table->text('whatsapp')->nullable();
            $table->text('active-email')->nullable();
            $table->text('description')->nullable();
            $table->text('tip')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('online_assessment_models');
    }
};
