<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Factory for generating Author model data.
 */
class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed> Generated data for an Author.
     */
    public function definition(): array
    {
        $birthDate = $this->faker
            ->optional(0.8)
            ->dateTimeBetween("-100 years", "-30 years");

        return [
            "name" => $this->faker->name(),
            "birth_date" => $birthDate ? $birthDate->format("Y-m-d") : null, // Ensure formatting only if birth_date exists
            "death_date" => $birthDate
                ? $this->faker
                    ->optional(0.5)
                    ->dateTimeBetween($birthDate, "now")
                    ?->format("Y-m-d")
                : null, // Only generate death_date if birth_date exists
            "bio" => $this->faker->optional(0.9)->paragraph(3),
            "nationality" => $this->faker->optional(0.7)->country(),
            "updated_at" => now(),
            "created_at" => now(),
        ];
    }
}
