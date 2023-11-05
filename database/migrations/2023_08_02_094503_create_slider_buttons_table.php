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
        Schema::create('slider_buttons', function (Blueprint $table) {
            $table->id();

            $table->integer('slider_id')->nullable();
			$table->string('button_title', 255);
			$table->string('url_page', 255);
			$table->integer('order')->default('0');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slider_buttons');
    }
};
