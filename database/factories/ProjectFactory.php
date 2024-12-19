<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Project;
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

    protected $model = Project::class;
    public function definition(): array
    {
        return [
            'title' => $this->faker->name(),
            'code' => $this->faker->word(),
            'course' => $this->faker->word(),
            'client_id' => Client::factory()
        ];
    }
}
