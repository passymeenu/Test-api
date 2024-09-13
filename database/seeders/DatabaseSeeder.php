<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
         \App\Models\Demo::factory(10)->create();

        // \App\Models\Demo::factory()->create([
        //     'name' => 'Test User',
        //     'address' => 'test@example.com',
        //     'role'=>'teacher',
        // ]);
       // $this->call(CountrySateCitySeeder::class);
        
    }
}
