<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'slug' => $this->faker->slug(),
            'doctor_id' => mt_rand(1,2),
            'patient_id' => mt_rand(1,3),
            'condition' => $this->faker->paragraph(),
            'temperature' => $this->faker->randomFloat(2,35, 45.5),
            'image_path' => $this->faker->image('public/storage/', 640, 480, null, false),
        ];
    }
}
