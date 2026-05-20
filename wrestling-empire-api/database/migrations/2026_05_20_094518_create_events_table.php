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
            $table->string('type'); // PROMO or MATCH
            $table->string('placement'); // UNDER, MID, SEMI, OR MAIN
            $table->foreignId('match_type_id')->constrained();
            $table->foreignId('finish_type_id')->constrained()->nullable();
            $table->foreignId('show_id')->constrained();
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
