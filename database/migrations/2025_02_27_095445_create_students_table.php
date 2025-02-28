<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('guardian_name');
            $table->string('guardian_phone');
            $table->text('medical_history')->nullable();
            $table->unsignedBigInteger('class_id'); // Foreign key
            $table->unsignedBigInteger('section_id'); // Foreign key
            $table->timestamps();

            // Define foreign key constraints
            $table->foreign('class_id')->references('id')->on('classes')->onDelete('cascade');
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
