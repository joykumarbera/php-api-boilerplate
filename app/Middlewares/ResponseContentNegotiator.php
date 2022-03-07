<?php


namespace App\Middlewares;

use Buki\Router\Http\Middleware;
use Symfony\Component\HttpFoundation\Response;

class ResponseContentNegotiator extends Middleware
{
    public function handle(Response $response)
    {
        $response->headers->set('Content-Type', 'application/json');
        
        return true;
    }
}