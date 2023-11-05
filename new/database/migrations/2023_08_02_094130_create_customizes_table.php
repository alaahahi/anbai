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
        Schema::create('customizes', function (Blueprint $table) {
            $table->id();

            $table->string('base_module_name', 255);
			$table->string('title', 255);
			$table->string('component', 255);
			$table->text('description')->nullable();
			$table->string('image', 255)->nullable();
			$table->boolean('active_navbar')->default('1');
            $table->boolean('active_home')->default('1');
			$table->boolean('active_dashboard')->default('1');
            $table->string('link', 255)->nullable();
			$table->integer('order')->default('0');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customizes');
    }
};
