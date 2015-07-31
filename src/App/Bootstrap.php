<?php

namespace App;

use Rad\Core\Bundle;
use Rad\Routing\Middleware\DispatcherMiddleware;
use Rad\Routing\Middleware\RouterMiddleware;
use Rad\Routing\MiddlewareCollection;

/**
 * App Bootstrap
 *
 * @package App
 */
class Bootstrap extends Bundle
{
    /**
     * Startup bundle
     */
    public function startup()
    {
        parent::startup();

        if ('cli' !== PHP_SAPI) {
            MiddlewareCollection::getInstance()->add(new RouterMiddleware());
            MiddlewareCollection::getInstance()->add(new DispatcherMiddleware());
        }
    }
}
