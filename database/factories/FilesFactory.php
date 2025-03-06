<?php

namespace Database\Factories;

use App\Models\Files;
use App\Models\Pelamar;
use Illuminate\Http\UploadedFile;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Files>
 */
class FilesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Files::class;

    public function definition(): array
    {
        return [
            'id_pelamar' => Pelamar::inRandomOrder()->first()->id ?? Pelamar::factory()->create()->id,
            'ijazah_terakhir' => fn() => UploadedFile::fake()->image('ijazah.jpg')->store('ijazah', 'public'),
            'transkrip_nilai' => fn() => UploadedFile::fake()->image('transkrip_nilai.jpg')->store('transkrip', 'public'),
        ];
    }
}
