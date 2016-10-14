<?php

namespace sisestar;

use Illuminate\Database\Eloquent\Model;

class Notificacao extends Model
{
     protected $fillable = ['placa','pais','marca','modelo','num_notificacao','data'
         . '','hora','num_cartao','local','numero','irregularidade',
         'observacao','data_lim_regularizacao','valor_amtt','valor_detran',
         'num_agente','setor','status'];
}
