<?php

$app = require dirname(__DIR__).'/app/bootstrap.php';

$container = $app->getContainer();

$settings = $container->get('settings');

// Get detailed information while development
if ($settings['mode'] === 'development') {
    $settings['displayErrorDetails'] = true;
}

// Let's set default timezone
if (isset($settings['timezone'])) {
    date_default_timezone_set($settings['timezone'] ?: 'UTC');
}

// Let's just use PHP Native sesion
if (!isset($_SESSION)) {
    session_name($settings['appname']);
    session_start();
}

require_once APP_DIR.'dependencies.php';

// require_once APP_DIR.'middlewares.php';

require_once APP_DIR.'routes.php';

$app->run();