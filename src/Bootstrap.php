<?php

namespace App;

use Rad\Config;
use Rad\DependencyInjection\Injectable;

/**
 * App Bootstrap
 */
class Bootstrap extends Injectable
{
    /**
     * App\Bootstrap Constructor
     */
    public function __construct()
    {
        Config::load(__DIR__ . '/Config/config.default.php');
        Config::load(__DIR__ . sprintf('/Config/config.%s.php', getenv('RAD_ENV')));
    }
}
