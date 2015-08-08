<?php

use Rad\Network\Http\Request;
use Rad\Network\Http\Response;

require __DIR__ . '/../vendor/autoload.php';

\Application::getInstance()->handleWeb(new Request());
