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
        Schema::create('rapors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('siswa_id');
            $table->foreign('siswa_id')->references('id')->on('siswas')->nullable($value = false);
            $table->string('nilai_nam')->nullable();
            $table->string('nilai_fm')->nullable();
            $table->string('nilai_k')->nullable();
            $table->string('nilai_b')->nullable();
            $table->string('nilai_sek')->nullable();
            $table->string('nilai_s')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rapors');
    }
};
