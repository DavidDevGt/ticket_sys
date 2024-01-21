<?php
require '../vendor/autoload.php';
use AltoRouter;
use Utils\ErrorHandler;

$router = new AltoRouter();

// SPA Routes
$router->map('GET', '/', function() {
    require __DIR__ . '/../views/user_app.php';
});

$router->map('GET', '/admin', function() {
    require __DIR__ . '/../views/admin_app.php';
});

$router->map('GET', '/login', function() {
    require __DIR__ . '/../views/login.php';
});

$router->map('POST', '/submit', function() {
    // Aquí se procesarían los datos enviados desde el formulario
});

// Manejar las rutas
$match = $router->match();
if ($match && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']); 
} else {
    ErrorHandler::notFound();
}