<?php

namespace Database\Factories;

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
    public function definition(): array
    {
        $title = $this->faker->sentence(3);
        
        return [
            'title' => $title,
            'slug' => \Illuminate\Support\Str::slug($title),
            'description' => $this->faker->paragraphs(3, true),
            'tech_stack' => $this->faker->randomElements([
                'Laravel', 'PHP', 'MySQL', 'Vue.js', 'React', 'Node.js', 
                'Tailwind CSS', 'Bootstrap', 'Docker', 'AWS', 'Git'
            ], $this->faker->numberBetween(2, 5)),
            'github_url' => $this->faker->optional()->url(),
            'live_url' => $this->faker->optional()->url(),
            'featured_image' => $this->faker->optional()->imageUrl(800, 600, 'technology'),
            'status' => $this->faker->randomElement(['draft', 'published']),
            'sort_order' => $this->faker->numberBetween(1, 100),
        ];
    }

    public function published(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => 'published',
        ]);
    }

    public function draft(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => 'draft',
        ]);
    }
}
