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
        Schema::create('food_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->cascaseOnDelete();
            $table->foreignId('unit_id')->constrained()->cascaseOnDelete();
            $table->foreignId('cuisine_id')->constrained()->cascaseOnDelete();
            $table->string('name');
            $table->string('price');
            $table->string('description');
            $table->string('image');
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food_items');
    }
};
