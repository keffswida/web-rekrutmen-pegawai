<?php

namespace Database\Factories;

use App\Models\Posisi;
use App\Models\Lowongan;
use App\Models\Departemen;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lowongan>
 */
class LowonganFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Lowongan::class;

    public function definition(): array
    {
        return [
            'posisi_id' => Posisi::inRandomOrder()->first()->id ?? Posisi::factory()->create()->id, // Pastikan posisi tersedia
            'departemen_id' => Departemen::inRandomOrder()->first()->id ?? Departemen::factory()->create()->id, // Pastikan departemen tersedia
            'lokasi' => $this->faker->city, // Menghasilkan nama kota
            'tgl_buka' => $this->faker->date(),
            'tgl_tutup' => $this->faker->dateTimeBetween('now', '+1 month')->format('Y-m-d'), // Pastikan setelah tgl_buka
            'kualifikasi' => $this->faker->sentence(),
            'deskripsi' => $this->faker->paragraph(),
            'kebutuhan_pelamar' => $this->faker->numberBetween(1, 10),
            'brosur' => function () {
                Storage::makeDirectory('public/brosur'); // Make sure directory exists
                $file = UploadedFile::fake()->image('brosur.jpg'); // Create fake image
                return $file->store('brosur', 'public'); // Store it
            },
            'status_low' => $this->faker->randomElement(['0', '1']),

        ];
    }
}
