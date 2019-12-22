<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [
      'name', 'cpf', 'dataNascimento', 'email', 'telefone', 'endereco', 'cidade', 'estado', 'cep'
    ];
}
