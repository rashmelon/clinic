<?php

use App\User;
use Illuminate\Database\Seeder;

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
                'name' => 'Abdulrahman Rashwan',
                'email' => 'abdo.ra.1997@gmail.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'Mohamed Swailam',
                'email' => 'm.swilam@equinesolutions.co',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
            ],
        ];
        foreach ($users as $user){
            User::create($user);
        }
    }
}
