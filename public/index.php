<?php

require_once __DIR__ . '/../includes/app.php';

use Controllers\IndexController;
use MVC\Router;

$router = new Router();

$router->get('/', [IndexController::class, 'index']);


// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();
