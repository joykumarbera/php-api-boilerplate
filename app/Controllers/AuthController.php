<?php

namespace App\Controllers;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends BaseController
{
    public function postLogin(Request $request, Response $response) 
    {
        $response->setContent(json_encode([
            'login' => 'post',
        ]));

        return $response;
    }

    public function postSignup(Request $request, Response $response) 
    {
        $response->setContent(json_encode([
            'signup' => 'response',
        ]));
        
        return $response;
    }
}