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
		//Model::unguard();

		 $this->call('UserTableSeeder');
	}


}
class UserTableSeeder extends Seeder{
	public function run(){
		DB::table('users')->insert([
				['name'=>'Thanh','email'=>'thanh@gmail.com','password'=>Hash::make(123)],
				['name'=>'T','email'=>'T@gmail.com','password'=>Hash::make(123)]

			]);
	}
}