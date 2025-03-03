<?php

namespace Database\Factories;

use App\Models\Pelamar;
use App\Models\Pendidikan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pendidikan>
 */
class PendidikanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Pendidikan::class;

    public function definition(): array
    {
        $tahunMasuk = $this->faker->year();
        $tahunLulus = $this->faker->year($tahunMasuk, '+3 years');

        return [
            'id_pelamar' => Pelamar::inRandomOrder()->first()->id ?? Pelamar::factory()->create()->id,
            'nama_institusi' => $this->faker->company(),
            'jurusan' => $this->faker->randomElement(['Teknik Informatika', 'Manajemen', 'Akuntansi', 'Kedokteran', 'Psikologi', 'Teknik Komputer dan Jaringan', 'Keperawatan', 'Farmasi', 'Kebidanan', 'Gizi']),
            'gelar' => $this->faker->randomElement(['0', '1', '2', '3', '4', '5']),
            'tahun_masuk' => $tahunMasuk,
            'tahun_lulus' => $tahunLulus,
            'deskripsi_sekolah' => $this->faker->sentence(),
        ];
    }
}
