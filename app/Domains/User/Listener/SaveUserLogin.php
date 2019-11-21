<?php

namespace App\Domains\User\Listener;

use App\Domains\User\Event\UserHasLoggedIn;

class SaveUserLogin
{
    public function __construct()
    {
        //TODO: implements
    }

    public function run(UserHasLoggedIn $event)
    {
        file_put_contents('log/app.log', "Saved that user $event->userId just logged in!");
    }
}
