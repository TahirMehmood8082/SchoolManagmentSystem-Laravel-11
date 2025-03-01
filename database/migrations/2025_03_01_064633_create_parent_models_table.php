<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentModelsTable extends Migration
{
    public function up(): void
    {
        Schema::create('parent_models', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->nullable(); // Make phone nullable if it's not always required
            $table->text('address')->nullable(); // Make address nullable if it's not always required
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('parent_models');
    }
}
