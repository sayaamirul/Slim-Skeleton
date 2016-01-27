<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class HomeController extends BaseController
{

    public function index(Request $request, Response $response, $args)
    {
        if(isset($args['name'])){
            return $this->view->render($response, 'home.twig', [
                'name' => $args['name'],
            ]);
        }

        return $this->view->render($response, 'home.twig');
    }
}