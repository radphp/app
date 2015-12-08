<?php

use App\AppBundle;
use Asset\AssetBundle;
use Rad\Network\Session;
use Rad\AbstractApplication;

/**
 * Application
 */
class Application extends AbstractApplication
{
    /**
     * {@inheritdoc}
     */
    public function registerBundles()
    {
        return [
            new AppBundle(),
            new AssetBundle(),
        ];
    }
}
