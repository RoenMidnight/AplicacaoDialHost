<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitante extends Model
{
    protected $fillable = [
        'Id','Nome', 'Email', 'Telefone', 'Celular', 'Dt_Nascimento', 
        'CEP', 'Bairro', 'Cidade', 'UF','Endereco'
    ];
    
}
