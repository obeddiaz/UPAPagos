<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
            Eloquent::unguard();

               // Add or Uncomment this line
               $this->call('UserTableSeeder');
	}

}
