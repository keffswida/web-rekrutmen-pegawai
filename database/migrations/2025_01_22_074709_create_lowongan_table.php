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
        Schema::create('lowongan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('posisi_id');
            $table->unsignedBigInteger('departemen_id');
            $table->string('lokasi');
            $table->date('tgl_buka');
            $table->date('tgl_tutup');
            $table->text('kualifikasi');
            $table->text('deskripsi');
            $table->integer('kebutuhan_pelamar');
            $table->string('brosur');
            $table->enum('status_low', ['0', '1']);
            $table->timestamps();

            $table->foreign('posisi_id')->references('id')->on('posisi')->onDelete('cascade');
            $table->foreign('departemen_id')->references('id')->on('departemen')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lowongan');
    }
};
