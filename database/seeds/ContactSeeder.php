<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'nome' => 'Arão Domingos',
            'usuario' => 'araodomingos',
            'senha' => Hash::make('qwerty'),
            'activo' => true
        ]);
    }
}
