<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;

class MoviesSeeder extends Seeder
{
    public function run(): void
    {
        // Gunakan factory untuk menghasilkan 50 data palsu
        Movie::factory()->count(50)->create();
    }
}
