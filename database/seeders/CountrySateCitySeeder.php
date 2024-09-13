<?php

namespace Database\Seeders;

use App\Models\city;
use App\Models\country;
use App\Models\state;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySateCitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $country = country::updateOrCreate(['name' => 'United State'],['name' => 'United State']);

        $state = state::updateOrCreate(['country_id' => $country->id, 'name' => 'Florida'],['country_id' => $country->id, 'name' => 'Florida']);

        city::updateOrCreate(['state_id' => $state->id, 'name' => 'Miami'],['state_id' => $state->id, 'name' => 'Miami']);
        city::updateOrCreate(['state_id' => $state->id, 'name' => 'Tampa'],['state_id' => $state->id, 'name' => 'Tampa']);

        //India Country Data

        $country = Country::updateOrCreate(['name' => 'India'],['name' => 'India']);

        $state = State::updateOrCreate(['country_id' => $country->id, 'name' => 'Gujarat'],['country_id' => $country->id, 'name' => 'Gujarat']);

        city::updateOrCreate(['state_id' => $state->id, 'name' => 'Rajkot'],['state_id' => $state->id, 'name' => 'Rajkot']);
        city::updateOrCreate(['state_id' => $state->id, 'name' => 'Surat'],['state_id' => $state->id, 'name' => 'Surat']);
    }
}


