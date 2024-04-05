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
        Schema::create('education_people', function (Blueprint $table) {
            $table->id();
            $table->string('school_name', 100);
            $table->string('obtained_title');
            
            // Utilizando foreignId y constrained para los foreign keys
            // $table->foreignId('study_status_id')->constrained('study_statuses');
            $table->foreignId('study_level_id')->constrained('study_levels');
            $table->foreignId('user_id')->constrained('users');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education_people');
    }
};
