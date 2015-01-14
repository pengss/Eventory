<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SeedUsersTableTableSeeder extends Seeder {

	public function run()
	{
		$users = [
            [
                'id' => '1',
                'username' => 'shensong',
                'password' => Hash::make('password1'),
                'name' => 'Shensong',
                'email' => 'ss.peng.2013@sis.smu.edu.sg',
                'organisation' => 'SMU Funk Movement',
                'user_type' => 'Event Organiser'
            ],
            [
                'id' => '2',
                'username' => 'kevin',
                'password' => Hash::make('password2'),
                'name' => 'Kevin',
                'email' => 'kevin@sis.smu.edu.sg',
                'organisation' => 'SISS',
                'user_type' => 'Sponsor'
            ],
        ];

        foreach($users as $user){
            DB::table('users')->insert($user);
        }
	}

}