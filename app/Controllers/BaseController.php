<?php

namespace App\Controllers;

use App\Middlewares\ResponseContentNegotiator;
use Buki\Router\Http\Controller;

class BaseController extends Controller
{
    /**
     * @var array After Middlewares
     */
    public $middlewareBefore = [
        ResponseContentNegotiator::class,
    ];
}