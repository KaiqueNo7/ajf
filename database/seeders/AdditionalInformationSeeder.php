<?php

namespace Database\Seeders;

use App\Models\AdditionalInformation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdditionalInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AdditionalInformation::factory()->count(5)->create();
    }
}
