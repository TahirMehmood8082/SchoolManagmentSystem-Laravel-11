<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('teacher_id')->nullable(); // Teacher assigned to course
            $table->timestamps();

            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
