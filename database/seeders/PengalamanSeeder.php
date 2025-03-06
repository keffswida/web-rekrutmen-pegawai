<?php

namespace Database\Seeders;

use App\Models\Pengalaman;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengalamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pengalaman::factory()->count(1)->create();
    }
}
