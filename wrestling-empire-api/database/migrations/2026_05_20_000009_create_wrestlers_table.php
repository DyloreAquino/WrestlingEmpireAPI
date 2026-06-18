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
        Schema::create('wrestlers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // Bio Info
            $table->string('name');
            $table->enum('gender', ['MALE', 'FEMALE', 'N/A']);
            // Wrestler info
            $table->string('finisher_name');
            $table->enum('allegiance', ['HEEL', 'FACE', 'TWEENER']);
            $table->enum('role', ['WRESTLER', 'MANAGER', 'BOOKER', 'REFEREE', 'CIVILIAN']);
            $table->foreignId('territory_id')->constrained()->restrictOnDelete();
            $table->foreignId('promotion_id')->constrained()->restrictOnDelete();
            // Wrestler Attributes
            $table->integer('popularity');
            $table->integer('strength');
            $table->integer('skill');
            $table->integer('agility');
            $table->integer('stamina');
            $table->integer('attitude');
            // Wrestler Relationships
            $table->foreignId('manager_id')->nullable()->constrained('wrestlers')->nullOnDelete();
            $table->foreignId('partner_id')->nullable()->constrained('wrestlers')->nullOnDelete();
            $table->foreignId('story_friend_id')->nullable()->constrained('wrestlers')->nullOnDelete();
            $table->foreignId('story_enemy_id')->nullable()->constrained('wrestlers')->nullOnDelete();
            $table->foreignId('real_friend_id')->nullable()->constrained('wrestlers')->nullOnDelete();
            $table->foreignId('real_enemy_id')->nullable()->constrained('wrestlers')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wrestlers');
    }
};
