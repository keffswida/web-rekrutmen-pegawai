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
        Schema::create('pelamar', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lowongan_id');
            $table->unsignedBigInteger('departemen_id')->nullable();
            $table->unsignedBigInteger('posisi_id')->nullable();
            $table->string('nama_lengkap');
            $table->string('nama_panggilan');
            $table->enum('jenis_kelamin', ['0', '1']);
            $table->enum('agama', ['0', '1', '2', '3', '4', '5']);
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->enum('status_kawin', ['0', '1']);
            $table->string('alamat');
            $table->string('no_telp');
            $table->string('email');
            $table->string('password');
            // $table->string('pendidikan');
            // $table->string('pengalaman');
            // $table->string('keterampilan');
            // $table->string('sertifikat');
            // $table->string('sertifikat_image')->nullable();
            $table->string('profile');
            $table->string('cv');
            $table->timestamps();

            $table->foreign('lowongan_id')->references('id')->on('lowongan')->onDelete('cascade');
            $table->foreign('departemen_id')->references('id')->on('departemen')->onDelete('cascade');
            $table->foreign('posisi_id')->references('id')->on('posisi')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelamar');
    }
};
