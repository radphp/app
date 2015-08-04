<?php

use Rad\Network\Session;
use Rad\Configure\Config;
use Rad\AbstractApplication;
use Rad\DependencyInjection\Registry;
use Rad\Network\Http\Response\Cookies;

/**
 * Class Application
 */
class Application extends AbstractApplication
{
    /**
     * Load config
     */
    public function loadConfig()
    {
        Config::load(CONFIG_DIR . DS . 'config.default.php');
        Config::load(CONFIG_DIR . DS . sprintf('config.%s.php', getenv('RAD_ENVIRONMENT')));

        Config::set('environment', getenv('RAD_ENVIRONMENT'));
    }

    /**
     * Load Services
     *
     * @return void
     */
    public function loadServices()
    {
        $this->container->setShared('registry', new Registry(), true);

        if ('cli' !== PHP_SAPI) {
            $this->container->setShared('cookies', new Cookies(), true);
            $this->container->setShared(
                'session',
                function () {
                    $session = new Session();
                    $session->start();

                    return $session;
                },
                true
            );
        }
    }
}
