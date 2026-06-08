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
        Schema::table('wrestlers', function (Blueprint $table) {
            $table->integer('strength')->nullable()->change();
            $table->integer('strength')->nullable()->change();
            $table->integer('skill')->nullable()->change();
            $table->integer('agility')->nullable()->change();
            $table->integer('stamina')->nullable()->change();
            $table->integer('attitude')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('wrestlers', function (Blueprint $table) {
            $table->integer('strength')->nullable(false)->change();
            $table->integer('strength')->nullable(false)->change();
            $table->integer('skill')->nullable(false)->change();
            $table->integer('agility')->nullable(false)->change();
            $table->integer('stamina')->nullable(false)->change();
            $table->integer('attitude')->nullable(false)->change();
        });
    }
};
