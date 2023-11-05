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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();

            $table->foreignId('project_type_id')->nullable();
            $table->string('name', 255);
			$table->string('client', 255)->nullable();
			$table->string('city', 255)->nullable();
			$table->string('consultant', 255)->nullable();
            $table->string('contract_duration', 255)->nullable();
			$table->string('contract_value', 255)->nullable();
			$table->text('description')->nullable();
			$table->string('start', 255)->nullable();
			$table->string('end_date', 255)->nullable();
			$table->string('image', 255)->nullable();
			$table->integer('status')->nullable();
            $table->boolean('active')->default('1');
			$table->integer('order')->default('0');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
