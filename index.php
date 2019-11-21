<?php

require_once __DIR__.'/vendor/autoload.php';

use Symfony\Component\EventDispatcher\EventDispatcher;

$dispatcher = new EventDispatcher();

var_dump($dispatcher);