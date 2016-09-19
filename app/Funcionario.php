<?php

namespace sisestar;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $fillable = ['nome','sobrenome','cpf','foto','matricula','data_nasc'];
}
