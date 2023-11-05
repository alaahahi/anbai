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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();

            $table->string('model');
            $table->integer('category_id')->nullable();
            $table->boolean('active')->default('1');
			$table->string('title', 255);
			$table->text('description')->nullable();
			$table->string('image', 255)->nullable();
			$table->integer('order')->default('0');
			$table->string('slug', 255)->nullable();
            $table->string('slug_title', 255)->nullable();
			$table->string('slug_keywords', 255)->nullable();
			$table->text('slug_description', 255)->nullable();
			$table->string('graph_title', 255)->nullable();
			$table->string('graph_type', 255)->nullable();
			$table->string('graph_image', 255)->nullable();
			$table->string('graph_url', 255)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
