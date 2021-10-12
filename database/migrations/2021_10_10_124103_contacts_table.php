<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('primeiro_nome', 100);
            $table->string('segundo_nome', 100);
            $table->date('data_nascimento');
            $table->string('endereco', 255);
            $table->string('telefone', 20);
            $table->string('complemento', 60);
            $table->string('cidade', 255);
            $table->char('estado', 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
