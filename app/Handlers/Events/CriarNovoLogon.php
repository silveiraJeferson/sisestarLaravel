<?php

namespace sisestar\Handlers\Events;

use sisestar\Events\NovoLogin;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;


class CriarNovoLogon
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
     * @param  NovoLogin  $event
     * @return void
     */
    public function handle(NovoLogin $event)
    {
        dd($logon);
    }
}
