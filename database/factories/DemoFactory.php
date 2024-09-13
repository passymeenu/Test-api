<?php

namespace Database\Factories;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Demo>
 */
class DemoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected static ?string $password;
    public function definition(): array
    {
            return [
            'name' => fake()->name(),
            'address' => fake()->address(),
            'role' => 'teacher',
            ];

    }
}
