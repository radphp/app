<?php

use Rad\Network\Session;
use Rad\Configure\Config;
use Rad\AbstractApplication;
use Rad\DependencyInjection\Registry;
use Rad\Network\Http\Response\Cookies;
use Rad\Network\Session\Flash\FlashBag;

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
        Config::set('debug', getenv('RAD_DEBUG'));
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

            $this->container->setShared(
                'session_bag',
                function ($bagName = 'default') {
                    $sessionBag = new Session\SessionBag($bagName);

                    return $sessionBag;
                },
                true
            );

            $this->container->setShared(
                'flash',
                function ($bagName = FlashBag::BAG_NAME) {
                    $flashBag = new FlashBag($bagName);

                    return $flashBag;
                },
                true
            );
        }
    }
}
