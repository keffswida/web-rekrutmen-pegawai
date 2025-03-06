<?php

namespace Database\Factories;

use App\Models\Keterampilan;
use App\Models\Pelamar;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Keterampilan>
 */
class KeterampilanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Keterampilan::class;

    public function definition(): array
    {
        return [
            'id_pelamar' => Pelamar::inRandomOrder()->first()->id ?? Pelamar::factory()->create()->id,
            'bidang_keterampilan' => $this->faker->randomElement([
                'Programming',
                'Technologies and Frameworks',
                'Design and Tools',
                'Akuntansi',
                'Marketing',
                'Kesehatan',
                'Administrasi RS',
                'Manajemen',
                'Farmasi'
            ]),
            'keterampilan_terkait' => $this->faker->randomElement([
                'Keperawatan, Diagnosis, Farmasi',
                'Gawat Darurat, Terapi Fisik',
                'Sistem Informasi Rumah Sakit, Keamanan Data Pasien',
                'Manajemen Database, Coding, Pengembangan Website',
                'Manajemen Pasien, Pengarsipan Medis, Asuransi Kesehatan',
                'Pelayanan Publik',
                'Manajemen Rumah Sakit, Pengelolaan Keuangan',
                'Sumber Daya Manusia, Logistik Kesehatan',
                'Obat-obatan, Resep Dokter',
                'Manajemen Stok Farmasi, Konseling Pasien',
                'Analisis Sampel, Mikrobiologi',
                'Biokimia, Patologi Klinis',
                'Pemeliharaan Alat Medis, Radiologi, MRI',
                'CT Scan, Teknologi Medis'
            ]),
        ];
    }
}
