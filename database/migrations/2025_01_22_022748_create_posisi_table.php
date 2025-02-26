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
        Schema::create('posisi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_posisi');
            $table->unsignedBigInteger('departemen_id');
            $table->string('deskripsi')->nullable();
            $table->enum('status', ['0', '1']);
            $table->timestamps();

            $table->foreign('departemen_id')->references('id')->on('departemen')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posisi');
    }
};
