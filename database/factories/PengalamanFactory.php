<?php

namespace Database\Factories;

use App\Models\Pelamar;
use App\Models\Pengalaman;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pengalaman>
 */
class PengalamanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Pengalaman::class;

    public function definition(): array
    {
        return [
            'id_pelamar' => Pelamar::inRandomOrder()->first()->id ?? Pelamar::factory()->create()->id,
            'tempat_kerja' => $this->faker->company(),
            'posisi_kerja' => $this->faker->jobTitle(),
            'periode_kerja' => $this->faker->randomElement([
                $this->faker->numberBetween(1, 12) . 'bulan',
                $this->faker->numberBetween(1, 20) . 'tahun',
            ]),
            'deskripsi_kerja' => $this->faker->sentence(),
        ];
    }
}
