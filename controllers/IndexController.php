<?php

namespace Controllers;

use MVC\Router;

class IndexController
{
    public static function index(Router $router)
    {
        $router->render('paginas/index');
    }
}
