#!/usr/bin/env php
<?php

require __DIR__ . '/../vendor/autoload.php';

\Application::getInstance()->handleCli($_SERVER['argv']);
