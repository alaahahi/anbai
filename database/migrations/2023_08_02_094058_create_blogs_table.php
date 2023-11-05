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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();

            $table->integer('category_id')->nullable();
            $table->integer('trending')->default('1');
            $table->integer('featured')->default('1');
            $table->boolean('active')->default('1');
			$table->string('lang', 255);
			$table->string('writer', 255);
			$table->string('title', 255);
			$table->text('description')->nullable();
			$table->string('image', 255)->nullable();
			$table->integer('order')->default('0');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
