<?php
require '../vendor/autoload.php';
use AltoRouter;

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
if($match && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']); 
} else {
    // En caso de que no se encuentre la ruta
    header("HTTP/1.0 404 Not Found");
    require __DIR__ . '/../views/404.php';
}