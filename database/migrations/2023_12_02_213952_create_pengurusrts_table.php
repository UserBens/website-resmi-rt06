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
        Schema::create('pengurusrt', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pengurus');
            $table->text('image')->nullable();
            $table->string("jabatan");
            $table->string("kategori_pengurus");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengurusrt');
    }
};
