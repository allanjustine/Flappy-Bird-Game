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
        Schema::create('tictactoe_scoreboards', function (Blueprint $table) {
            $table->id();
            $table->string('player_name')->nullable();
            $table->string('difficulty')->nullable();
            $table->integer('win')->nullable();
            $table->integer('loss')->nullable();
            $table->integer('draw')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tictactoe_scoreboards');
    }
};
