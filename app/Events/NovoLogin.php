<?php

namespace sisestar\Events;

use sisestar\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class NovoLogin extends Event
{
    use SerializesModels;
    private $logon;
    

    /**
     * Create a new event instance.
     *
     * @return void
     */
    function __construct($logon) {
        $this->logon = $logon;
    }
    function getLogon() {
        return $this->logon;
    }

    
        /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
