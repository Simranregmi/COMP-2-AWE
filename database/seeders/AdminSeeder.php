<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \App\Models\User::create([
            'name' => 'Arjun Shrestha',
            'email' => 'alexizshrestha11@gmail.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
            'role' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $this->call(BookTableSeeder::class);
        $this->call(CdTableSeeder::class);
        $this->call(GameTableSeeder::class);
    }
}
