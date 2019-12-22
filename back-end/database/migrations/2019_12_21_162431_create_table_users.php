<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableUsers extends Migration
{

    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->char('cpf');
            $table->date('dataNascimento');
            $table->string('email');
            $table->char('telefone');
            $table->string('endereco');
            $table->string('cidade');
            $table->string('estado');
            $table->char('cep');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
