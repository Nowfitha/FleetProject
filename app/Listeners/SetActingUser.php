<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;

class SetActingUser
{
    /**
     * Create the event listener.
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
     * @param  Login  $event
     * @return void
     */
    public function handle(Login $event)
    {
        setActingUser($event->user);
    }
}
