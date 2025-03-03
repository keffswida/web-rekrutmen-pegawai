<?php

namespace Database\Factories;

use App\Models\Pelamar;
use App\Models\Lowongan;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pelamar>
 */
class PelamarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Pelamar::class;

    public function definition(): array
    {
        return [
            'lowongan_id' => Lowongan::inRandomOrder()->first()->id ?? Lowongan::factory()->create()->id,
            'nama_lengkap' => $this->faker->name(),
            'nama_panggilan' => $this->faker->firstName(),
            'jenis_kelamin' => $this->faker->randomElement(['0', '1']),
            'agama' => $this->faker->randomElement(['0', '1', '2', '3', '4', '5']),
            'tempat_lahir' => $this->faker->city(),
            'tgl_lahir' => $this->faker->date(),
            'status_kawin' => $this->faker->randomElement(['0', '1']),
            'alamat' => $this->faker->address(),
            'no_telp' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
            'password' => bcrypt('password'),
            // 'profile' => function () {
            //     Storage::makeDirectory('public/profiles'); // Make sure directory exists
            //     $file = UploadedFile::fake()->image('profile.jpg'); // Create fake image
            //     return $file->store('profiles', 'public'); // Store it
            // },
            // 'cv' => function () {
            //     Storage::makeDirectory('public/cvs'); // Make sure directory exists
            //     $file = UploadedFile::fake()->image('cv.jpg'); // Create fake image
            //     return $file->store('cvs', 'public'); // Store it
            // },
            'profile' => fn() => UploadedFile::fake()->image('profile.jpg')->store('profiles', 'public'),
            'cv' => fn() => UploadedFile::fake()->image('cv.jpg')->store('cvs', 'public'),


        ];
    }
}
