<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('libraries', function (Blueprint $table) {
            $table->id();
            $table->string('book_title');
            $table->string('author');
            $table->unsignedBigInteger('student_id')->nullable();
            $table->date('borrowed_date')->nullable();
            $table->date('returned_date')->nullable();
            $table->timestamps();

            $table->foreign('student_id')->references('id')->on('students')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('libraries');
    }
};
