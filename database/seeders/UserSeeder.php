<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'email' => 'user',
                'password' => bcrypt('user'),
                'first_name' => 'username',
                'second_name' => 'usersecname',
                'address' => 'user address',
                'isAdmin' => false
            ],
            [
                'email' => 'admin',
                'password' => bcrypt('admin'),
                'first_name' => 'adminname',
                'second_name' => 'adminsecname',
                'address' => 'admin address',
                'isAdmin' => true
            ]
        ]);
    }
}
