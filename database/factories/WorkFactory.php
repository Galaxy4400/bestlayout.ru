<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Work>
 */
class WorkFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition(): array
	{
		return [
			'name' => $this->faker->company(),
			'description' => $this->faker->words(10, true),
			'thumbnail' => $this->faker->file(base_path('tests/Fixtures/images/works'), storage_path('app/public/images/works'), false),
		];
	}
}
