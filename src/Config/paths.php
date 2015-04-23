<?php

if (!defined('DS')) {
    // Define shorter directory separator
    define('DS', DIRECTORY_SEPARATOR);
}

// Define root path
define('ROOT', dirname(dirname(__DIR__)));

// Define app directory name
define('APP_DIR', 'src');

// Define app path
define('APP', ROOT . DS . APP_DIR);

// Define config path
define('CONFIG', APP . DS . 'Config');

// Define bundles directory name
define('BUNDLES_DIR', 'bundles');

// Define bundles path
define('BUNDLES', ROOT . DS . BUNDLES_DIR);
