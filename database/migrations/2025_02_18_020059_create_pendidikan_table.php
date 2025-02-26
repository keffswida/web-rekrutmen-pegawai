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
        Schema::create('pendidikan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pelamar');
            $table->string('nama_institusi');
            $table->string('jurusan');
            $table->enum('gelar', ['0', '1', '2', '3', '4', '5'])->nullable();
            $table->string('tahun_masuk');
            $table->string('tahun_lulus');
            $table->string('deskripsi_sekolah')->nullable();
            $table->timestamps();

            $table->foreign('id_pelamar')->references('id')->on('pelamar')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendidikan');
    }
};
