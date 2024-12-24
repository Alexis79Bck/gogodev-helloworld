<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Author>
 */
class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $gender = fake()->randomElement(['Male', 'Female']);

        $maxDate = Carbon::now();
        $minDate = $maxDate->copy()->subYears(72);

        do {
            $birthdate = fake()->dateTimeBetween($minDate, $maxDate);
            $age = Carbon::now()->diffInYears($birthdate);
        } while ($age < 18 || $age > 75);

        return [
            'first_name' => fake()->name($gender),
            'last_name' => fake()->lastName($gender),
            'birthday' => $birthdate,
            'gender' => $gender
        ];
    }
}
