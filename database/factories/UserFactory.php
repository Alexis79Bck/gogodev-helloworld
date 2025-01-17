<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $gender = fake()->randomElement(['Male','Female']);
        return [
            'first_name' => fake()->name($gender),
            'last_name' => fake()->name($gender),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'username' => fake()->name(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
            'age' => fake()->numberBetween(18, 75),
            'phone' => fake()->numerify('(0###)-###.##.##'),
            'address' => fake()->address(),
            'zip_code' => fake()->postcode(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
