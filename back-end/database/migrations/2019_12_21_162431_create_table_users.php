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
            $table->integer('cpf');
            $table->date('dataNascimento');
            $table->string('email');
            $table->integer('telefone');
            $table->string('endereco');
            $table->string('cidade');
            $table->string('estado');
            $table->integer('cep');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
