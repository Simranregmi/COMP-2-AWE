<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cd;

class CdTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cd::factory()
        ->count(100)
        ->create();
    }
}
