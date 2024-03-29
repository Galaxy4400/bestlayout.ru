<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Work;
use Illuminate\Database\Seeder;
use Database\Factories\AdminFactory;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 */
	public function run(): void
	{
		Work::factory(10)->create();

		AdminFactory::new()->createOne([
			'email' => 'moiseevEO@yandex.ru',
			'password' => bcrypt('1234'),
			'name' => 'Евгений',
		]);
	}
}
