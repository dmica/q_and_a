<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'     => $this->faker->sentences(1, true),
            'body'      => $this->faker->paragraphs(1, true),
            'views'     => $this->faker->numberBetween(1,25),
            'answers'   => $this->faker->sentences(3, true),
            'votes'     => $this->faker->unique(true)->numberBetween(1, 50),
            'user_id'   => User::inRandomOrder()->first()->id,
            // 'created_at' => now(),
            // 'updated_at' => now(),
        ];
    }
}
