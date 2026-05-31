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
        Schema::create('shows', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('year'); // Year of Show
            $table->integer('month'); // Jan to Dec, in integer form
            $table->integer('week'); // 1st to 4th week of the month
            $table->enum('type', ['TV', 'PPV', 'SPECIAL']); // TV, PPV, or SPECIAL
            $table->foreignId('territory_id')->constrained(); // Where show took place
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shows');
    }
};
