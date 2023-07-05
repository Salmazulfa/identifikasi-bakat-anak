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
        Schema::create('nilai_cfsfs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bakat_id');
            $table->foreign('bakat_id')->references('id')->on('bakats')->nullable($value = false);
            $table->unsignedBigInteger('kriteria_id');
            $table->foreign('kriteria_id')->references('id')->on('kriterias')->nullable($value = false);
            $table->enum('jenis',['CF','SF']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_cfsfs');
    }
};
