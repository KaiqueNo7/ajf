<?php

namespace Database\Seeders;

use App\Models\Photos;
use Illuminate\Database\Seeder;

class PhotosSeeder extends Seeder
{
    public function run(): void
    {
        Photos::factory()->count(10)->create();
    }
}
