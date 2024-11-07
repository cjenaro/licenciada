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
        Schema::create('measurements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained()->onDelete('cascade');

            // Basic Measurements
            $table->float('body_mass')->nullable();
            $table->float('stretch_stature')->nullable();
            $table->float('sitting_height')->nullable();
            $table->float('arms_span')->nullable();

            // Skinfolds
            $table->float('triceps')->nullable();
            $table->float('subscapular')->nullable();
            $table->float('biceps')->nullable();
            $table->float('iliac_crest')->nullable();
            $table->float('supraspinale')->nullable();
            $table->float('abdominal')->nullable();
            $table->float('thigh')->nullable();
            $table->float('calf')->nullable();

            // Girths
            $table->float('arm_relaxed')->nullable();
            $table->float('arm_flexed_contracted')->nullable();
            $table->float('waist')->nullable();
            $table->float('hips')->nullable();
            $table->float('thigh_middle')->nullable();
            $table->float('girth_calf')->nullable();

            // Breadths
            $table->float('humerus')->nullable();
            $table->float('bi_styloid')->nullable();
            $table->float('femur')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('measurements');
    }
};
