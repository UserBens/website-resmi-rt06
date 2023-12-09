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
        Schema::create('datapenduduk', function (Blueprint $table) {
            $table->id();
            $table->string('jml_penduduk');
            $table->string('jml_laki');
            $table->string('jml_perempuan');
            $table->string('jml_kk');
            $table->string('jml_kk_kontrak');
            $table->string('jml_kk_kos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datapenduduk');
    }
};
