<?php

namespace Database\Seeders;

use App\Models\Photos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhotoSeeder extends Seeder
{
    public function run(): void
    {
        Photos::factory()->count(10)->create();
    }
}
