<?php

require_once __DIR__.'/vendor/autoload.php';

use Symfony\Component\EventDispatcher\EventDispatcher;
use App\Domains\User\Listener\SaveUserLogin;
use App\Domains\User\Event\UserHasLoggedIn;

$dispatcher = new EventDispatcher();

$listener = new SaveUserLogin();
$dispatcher->addListener('user.login', [$listener, 'run']);


$event = new UserHasLoggedIn(rand(1, 999));
$dispatcher->dispatch($event, 'user.login');


dump($dispatcher);