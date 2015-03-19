<?php

use App\Poem;
use App\Story;
use App\User;
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
		User::create([
            'first_name'    =>  'Admin',
            'family_name'   =>  'Adminov',
            'email'         =>  'admin@admin.com',
            'password'      =>  Hash::make('1q2w3e4r'),
            'role'          =>  'administrator'
        ]);

		// $this->call('UserTableSeeder');
	}

}
