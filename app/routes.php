<?php

$app->get('/[{name}]', 'App\Controllers\HomeController:index')
    ->setName('home');
