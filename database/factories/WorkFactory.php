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
			'link' => $this->faker->url(),
			'type' => $this->faker->numberBetween(1, 2),
			'thumbnail' => 'images/works/' . $this->faker->file(
				base_path('tests/Fixtures/images/works'), 
				storage_path('app/public/images/works'),
				false
			),
		];
	}
}


// Text::make('Название', 'name'),
// Text::make('Описание', 'description'),
// Url::make('Основная ссылка', 'link'),
// Select::make('Тип', 'type')->options(config('works.types')),
// Image::make('Превью', 'thumbnail')->dir('images/works'),
// Json::make('Дополнительные ссылки', 'links')->fields([
// 	Text::make('Называние', 'name'),
// 	Url::make('Ссылка', 'link'),
// ])->removable(),