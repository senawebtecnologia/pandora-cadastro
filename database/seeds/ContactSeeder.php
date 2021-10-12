<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'primeiro_nome' => 'Arão',
            'segundo_nome' => 'Domingos',
            'data_nascimento' => now(),
            'endereco' => 'Cazenga, Luanda',
            'cidade' => 'Luanda',
            'complemento' => 'bairro petrangol',
            'estado' => 'LD',
            'telefone' => 939547161,

        ]);
    }
}
