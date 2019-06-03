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
            'name' => 'Ashfaq',
            'email' => 'tricksfree.in@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('secret'),
        ]);
    }
}
