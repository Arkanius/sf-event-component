<?php

namespace App\Domains\User\Event;

class UserHasLoggedIn
{
    public $userId;

    public function __construct(int $userId)
    {
        $this->userId = $userId;
    }
}
