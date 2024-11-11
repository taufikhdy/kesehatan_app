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
        Schema::create('data_siswa', function (Blueprint $table) {
            $table->id();

            $table->string('nama');
            $table->string('kelas');
            $table->string('wali_kelas');
            $table->string('keluhan');
            $table->string('status');
            $table->string('tanggal');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_sakit');
    }
};
