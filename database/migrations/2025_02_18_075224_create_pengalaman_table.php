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
        Schema::create('pengalaman', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pelamar');
            $table->string('tempat_kerja');
            $table->string('posisi_kerja');
            $table->string('periode_kerja');
            $table->string('deskripsi_kerja');
            $table->timestamps();

            $table->foreign('id_pelamar')->references('id')->on('pelamar')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengalamen');
    }
};
