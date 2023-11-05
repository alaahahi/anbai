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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();

            $table->string('full_name_admin', 255)->nullable();
            $table->string('site_title', 255)->nullable();
			$table->string('email', 255)->nullable();
			$table->string('phone', 255)->nullable();
			$table->text('description')->nullable();
			$table->string('logo', 255)->nullable();
			$table->string('logo_white', 255)->nullable();
			$table->string('logo_sm', 255)->nullable();
			$table->string('logo_sm_white', 255)->nullable();
			$table->string('icon', 255)->nullable();
			$table->string('copy_right', 255)->nullable();
            $table->string('seo_title', 255)->nullable();
			$table->string('seo_description', 255)->nullable();
			$table->string('seo_slug', 255)->nullable();
			$table->string('seo_Keyword', 255)->nullable();

			$table->string('graph_title', 255)->nullable();
			$table->string('graph_type', 255)->nullable();
			$table->string('graph_image_alt', 255)->nullable();
			$table->string('grap_url', 255)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
