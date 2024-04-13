<?php

namespace Database\Seeders;

use App\Models\Property as ModelsProperty;
use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    public function run(): void
    {
        ModelsProperty::factory()->create();;
    }
}
