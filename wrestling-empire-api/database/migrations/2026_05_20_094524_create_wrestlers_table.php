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
            $table->string('gender');
            // Wrestler info
            $table->string('finisher_name');
            $table->string('allegiance'); // HEEL or FACE
            $table->string('role'); // Wrestler, Manager, Booker, Referee, or Civilian
            $table->foreignId('territory_id')->constrained();
            $table->foreignId('promotion_id')->constrained();
            // Wrestler Attributes
            $table->integer('popularity');
            $table->integer('strength');
            $table->integer('skill');
            $table->integer('agility');
            $table->integer('stamina');
            $table->integer('attitude');
            // Wrestler Relationships
            $table->foreignId('manager_id')->nullable()->constrained('wrestlers');
            $table->foreignId('partner_id')->nullable()->constrained('wrestlers');
            $table->foreignId('story_friend_id')->nullable()->constrained('wrestlers');
            $table->foreignId('story_enemy_id')->nullable()->constrained('wrestlers');
            $table->foreignId('real_friend_id')->nullable()->constrained('wrestlers');
            $table->foreignId('real_enemy_id')->nullable()->constrained('wrestlers');
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
