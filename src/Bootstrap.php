<?php

namespace App;

use Rad\Config;
use Rad\DependencyInjection\ContainerAware;
use Rad\Event\EventDispatcher;

/**
 * App Bootstrap
 *
 * @method EventDispatcher getEventService()
 */
class Bootstrap extends ContainerAware
{
    /**
     * App\Bootstrap Constructor
     */
    public function __construct()
    {
        Config::load(__DIR__ . '/Config/config.default.php');
        Config::load(__DIR__ . sprintf('/Config/config.%s.php', getenv('RAD_ENV')));
        Config::set('env', getenv('RAD_ENV'));
    }
}
