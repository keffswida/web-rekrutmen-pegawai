<?php

namespace Database\Factories;

use App\Models\Pelamar;
use App\Models\Lowongan;
use App\Models\User;
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
            'user_id' => User::inRandomOrder()->first()->id ?? User::factory()->create()->id,
            'lowongan_id' => Lowongan::inRandomOrder()->first()->id ?? Lowongan::factory()->create()->id,
            // 'nama_lengkap' => fn($attributes) => User::find($attributes['user_id'])->nama_lengkap,
            // 'nama_panggilan' => fn($attributes) => User::find($attributes['user_id'])->nama_panggilan,
            'jenis_kelamin' => $this->faker->randomElement(['0', '1']),
            'agama' => $this->faker->randomElement(['0', '1', '2', '3', '4', '5']),
            'tempat_lahir' => $this->faker->city(),
            'tgl_lahir' => $this->faker->date(),
            'status_kawin' => $this->faker->randomElement(['0', '1']),
            'alamat' => $this->faker->address(),
            'no_telp' => $this->faker->phoneNumber(),
            // 'email' => fn($attributes) => User::find($attributes['user_id'])->email,
            // 'password' => fn($attributes) => User::find($attributes['user_id'])->password,
            'profile' => fn() => UploadedFile::fake()->image('profile.jpg')->store('profiles', 'public'),
            'ktp' => fn() => UploadedFile::fake()->image('ktp.jpg')->store('ktps', 'public'),
            // 'cv' => fn() => UploadedFile::fake()->image('cv.jpg')->store('cvs', 'public'),
            'cv' => fn() => UploadedFile::fake()->create('cv.pdf', 100, 'application/pdf')->store('cvs', 'public'),


        ];
    }
}
