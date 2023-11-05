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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();

            $table->string('title', 255)->nullable();
			$table->string('phone', 255)->nullable();
			$table->string('office_phone', 255)->nullable();
			$table->string('fax', 255)->nullable();
			$table->string('email', 255)->nullable();
			$table->text('address', 255)->nullable();
			$table->text('location')->nullable();
			$table->string('from_hour', 255)->nullable();
			$table->string('to_hour', 255)->nullable();
			$table->string('from_day', 255)->nullable();
			$table->string('to_day', 255)->nullable();
			$table->text('maps')->nullable();
			$table->string('image', 255)->nullable();
			$table->string('icon', 255)->nullable();
			$table->integer('order_timeline')->default('0');
			$table->string('branch_date', 255)->nullable();
			$table->integer('order')->default('0');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
