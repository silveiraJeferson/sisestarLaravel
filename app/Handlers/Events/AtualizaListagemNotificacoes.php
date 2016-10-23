<?php

namespace sisestar\Handlers\Events;

use sisestar\Events\NotificacaoFoiCadastrada;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class AtualizaListagemNotificacoes
{
    /**
     * Create the event handler.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  NotificacaoFoiCadastrada  $event
     * @return void
     */
    public function handle(NotificacaoFoiCadastrada $event)
    {
        return "Notificacao Cadastrada";
    }
}
