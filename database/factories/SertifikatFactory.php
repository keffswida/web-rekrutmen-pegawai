<?php

namespace Database\Factories;

use App\Models\Pelamar;
use App\Models\Sertifikat;
use Illuminate\Http\UploadedFile;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sertifikat>
 */
class SertifikatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Sertifikat::class;

    public function definition(): array
    {
        return [
            'id_pelamar' => Pelamar::inRandomOrder()->first()->id ?? Pelamar::factory()->create()->id,
            'sertifikat' => $this->faker->randomElement([
                'Sertifikat Keperawatan',
                'Sertifikat Basic Life Support (BLS)',
                'Sertifikat Advanced Cardiac Life Support (ACLS)',
                'Sertifikat Pediatric Advanced Life Support (PALS)',
                'Sertifikat Gawat Darurat',
                'Sertifikat Kesehatan Masyarakat',
                'Sertifikat Manajemen Rumah Sakit',
                'Sertifikat Farmasi Klinik',
                'Sertifikat Teknisi Farmasi',
                'Sertifikat Analis Kesehatan',
                'Sertifikat Mikrobiologi Klinik',
                'Sertifikat Radiologi',
                'Sertifikat CT Scan & MRI',
                'Sertifikat Teknisi Medis',
                'Sertifikat Pemeliharaan Alat Medis',
                'Sertifikat Rekam Medis & Informasi Kesehatan',
                'Sertifikat Coding & Billing Medis'
            ]),
            'sertifikat_image' => fn() => UploadedFile::fake()->image('sertifikat.jpg')->store('sertifikat_image', 'public'),
        ];
    }
}
