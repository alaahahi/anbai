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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();

            $table->foreignId('team_member_type_id')->nullable();
			$table->string('title', 255);
			$table->string('email', 255)->nullable();
			$table->string('phone', 255)->nullable();
			$table->integer('completed_projects')->nullable();
			$table->text('address', 255)->nullable();
			$table->string('position', 255)->nullable();
            $table->string('experience', 255)->nullable();
            $table->string('support', 255)->nullable();
            $table->string('langs', 255)->nullable();
            $table->text('bio')->nullable();
			$table->string('Join_at')->nullable();
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
        Schema::dropIfExists('teams');
    }
};
