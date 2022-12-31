<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $title = $this->faker->sentence();

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'description' => $this->faker->paragraph(),
            // Necesitamos una imagen de portada para el proyecto con placeholder
            'cover' => 'https://via.placeholder.com/1600x900.png?text=Cover',
            'link' => $this->faker->url(),
            'image_1' => 'https://via.placeholder.com/1600x900.png?text=Image+1',
            'image_2' => 'https://via.placeholder.com/1600x900.png?text=Image+2',
            'image_3' => 'https://via.placeholder.com/1600x900.png?text=Image+3',
            'client' => $this->faker->company(),
        ];
    }
}
