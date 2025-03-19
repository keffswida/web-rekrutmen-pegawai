<?php

namespace Database\Seeders;

use App\Models\Keterampilan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KeterampilanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Keterampilan::factory()->count(9)->create();
    }
}
