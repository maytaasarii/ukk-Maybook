<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'ermaytaa09@gmail.com',
                'password' => bcrypt('Ermayy12345'),
            ]
        ];

        User::insert($users);
    }
}
