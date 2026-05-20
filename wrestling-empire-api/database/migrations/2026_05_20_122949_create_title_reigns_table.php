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
        Schema::create('title_reigns', function (Blueprint $table) {
            $table->id();
            $table->foreignId('championship_id')->constrained();
            $table->integer('year_start');
            $table->integer('month_start');
            $table->integer('week_start');
            $table->integer('year_end')->nullable();
            $table->integer('month_end')->nullable();
            $table->integer('week_end')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('title_reigns');
    }
};
