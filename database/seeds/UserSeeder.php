<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Arão Domingos',
            'user_name' => 'araodomingos',
            'email' => 'araodomingos04@gmail.com',
            'password' => Hash::make('qwerty'),
            'access' => 0,
            'active' => 1
        ]);
    }
}
