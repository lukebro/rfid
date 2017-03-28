<?php

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
        DB::table('users')->insert([
            'username' => 'test',
            'email' => 'test1@email.com',
            'password' => bcrypt('test'),
            'remember_token' => str_random(10)
        ]);
    }
}