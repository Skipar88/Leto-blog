<?php

use App\CommentPoem;
use App\CommentStory;
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
//		User::create([
//            'first_name'    =>  'Admin',
//            'family_name'   =>  'Adminov',
//            'email'         =>  'admin@admin.com',
//            'password'      =>  Hash::make('1q2w3e4r'),
//            'role'          =>  'administrator'
//        ]);

        for($n = 1; $n < 30; $n++)
        {
            Poem::create([
                'poem_title'    => 'Probwa',
                'poem_content'  => 'Proba'
            ]);

            Story::create([
                'story_title'    => 'Probwa',
                'story_content'  => 'Proba'
            ]);

            CommentPoem::create([
                'poem_id'    => '3',
                'user_id'    => '1',
                'comment_content'    => 'Probwa'
            ]);

            CommentStory::create([
                'story_id'    => '3',
                'user_id'    => '1',
                'comment_content'    => 'Probwa'
            ]);
        }

		// $this->call('UserTableSeeder');
	}

}
