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
        Schema::create('coaches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('name')->nullable();
            $table->string('image')->nullable();
            $table->string('job_title')->nullable();
            $table->json('coaching_format')->nullable();
            $table->json('languages')->nullable();
            $table->json('expriences')->nullable();
            $table->json('regions')->nullable();
            $table->string('about')->nullable();
            $table->json('service_areas')->nullable();
            $table->text('industries')->nullable();
            $table->text('coaching_methods')->nullable();
            $table->json('methods')->nullable();
            $table->json('degrees')->nullable();
            $table->json('education_exprience')->nullable();
            $table->json('references')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coaches');
    }
};
