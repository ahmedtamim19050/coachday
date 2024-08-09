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
            $table->string('name');
            $table->string('image');
            $table->string('job_title');
            $table->string('coaching_format');
            $table->string('language');
            $table->string('exprience');
            $table->string('region');
            $table->string('about');
            $table->json('subjects');
            $table->text('industries');
            $table->text('coaching_methods');
            $table->json('methods');
            $table->json('degrees');
            $table->json('education_exprience');
            $table->json('references');
            $table->string('phone');
            $table->string('email');
            $table->string('address');
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
