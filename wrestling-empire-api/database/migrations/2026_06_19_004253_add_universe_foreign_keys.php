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
        Schema::table('championships', function (Blueprint $table) {
            $table->foreignId('universe_id')->constrained()->cascadeOnDelete();
        });

        Schema::table('shows', function (Blueprint $table) {
            $table->foreignId('universe_id')->constrained()->cascadeOnDelete();
        });

        Schema::table('wrestlers', function (Blueprint $table) {
            $table->foreignId('universe_id')->constrained()->cascadeOnDelete();
        });

        Schema::table('teams', function (Blueprint $table) {
            $table->foreignId('universe_id')->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('championships', function (Blueprint $table) {
            $table->dropColumn('universe_id');
        });

        Schema::table('shows', function (Blueprint $table) {
            $table->dropColumn('universe_id');
        });

        Schema::table('wrestlers', function (Blueprint $table) {
            $table->dropColumn('universe_id');
        });

        Schema::table('teams', function (Blueprint $table) {
            $table->dropColumn('universe_id');
        });
    }
};
