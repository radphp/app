<?php

use Rad\Application;

require __DIR__ . '/../vendor/autoload.php';
require dirname(__DIR__) . '/src/Config/paths.php';

Application::getInstance()->runCli();
