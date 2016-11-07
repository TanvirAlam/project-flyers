<?php

class UsersTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$faker = Faker\Factory::create();

		foreach (range(1, 20) as $key => $value) 
		{
			User::create([
					'name' => $faker->username,
					'email' => $faker->email,
					'password' => Hash::make($faker->word)
				]);
		}
	}

}