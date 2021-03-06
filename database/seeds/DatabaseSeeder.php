<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
        //Seed the countries
        $this->call('CountriesSeeder');
        $this->command->info('Seeded the countries!');
        // $this->call('UserTableSeeder');
	}

}
