<?php

use Slim\Container;


$container['view'] = function (Container $c) use ($settings) {
    $settings = $c->get('settings');
    $view = new \Slim\Views\Twig(
        $settings['view']['template_path'],
        $settings['view']['twig']
    );
    // Add extensions
    $view->addExtension(new Slim\Views\TwigExtension(
        $c->get('router'),
        $c->get('request')->getUri())
    );

    $view->addExtension(new Twig_Extension_Debug());
    return $view;
};

$container['logger'] = function (Container $c) use ($settings) {
    $settings = $c->get('settings');
    $logger = new \Monolog\Logger($settings['logger']['name']);
    $logger->pushProcessor(new \Monolog\Processor\UidProcessor());
    $logger->pushHandler(new \Monolog\Handler\StreamHandler(
            $settings['logger']['path'],
            \Monolog\Logger::DEBUG)
    );
    return $logger;
};