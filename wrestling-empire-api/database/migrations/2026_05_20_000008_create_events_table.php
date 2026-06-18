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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['PROMO', 'MATCH', 'SEGMENT', 'BRAWL']); // PROMO or MATCH
            $table->enum('placement', ['UNDER', 'MID', 'SEMI', 'MAIN']); // UNDER, MID, SEMI, OR MAIN
            $table->foreignId('match_type_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('championship_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('show_id')->constrained()->cascadeOnDelete();
            $table->string('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
