<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Note;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Note>
 */
class NoteFactory extends Factory
{
    protected $model = Note::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        return [
            'title' => fake()->words(4, true),
            'description' => fake()->sentences(4, true),
            'deadline' => fake()->dateTime('now', 'America/Caracas'),
            'done' => fake()->boolean(44),
            'author_id' => function () {
                return Author::factory()->create()->id;
            }
        ];
    }
}
