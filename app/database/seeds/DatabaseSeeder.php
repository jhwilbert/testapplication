<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		Eloquent::unguard();

		$this->call('UserTableSeeder');
	}

}

class UserTableSeeder extends Seeder {

	public function run(){ 

		DB::table('users')->delete();

		User::create(array(
			'name' => 'Victor',
			'email' => 'victorbv@gmail.com',
			'role' => 'admin',
			'password' => Hash::make('123456')
		));

	}
}