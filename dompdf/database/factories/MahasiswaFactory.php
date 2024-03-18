<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $class = 'TIF RP 21' . chr(rand(65, 90));
        return [
            'name' => fake()->name(),
            'class' => $class,
            'npm' => fake()->unique()->numberBetween(21552011001, 21552011900),
        ];
    }
}
