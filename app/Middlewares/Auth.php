<?php

namespace App\Middlewares;

use Buki\Router\Http\Middleware;
use Symfony\Component\HttpFoundation\Request;


class Auth extends Middleware
{
    public function handle()
    {
        // if ( true ) {
        //     // you can redirect another url here 
        //     // or 
        //     // you can write error message, view, json response, etc...
        //     echo 'got fucked up';
      
        //     return false;
        // }
      
        return true;
    }
}