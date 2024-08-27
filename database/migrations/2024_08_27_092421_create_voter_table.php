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
        Schema::create('voter', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->double('nid');
            $table->double('voter_id');
            $table->double('vote_left');
            $table->double('lifetime_vote');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voter');
    }
};
