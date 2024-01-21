<?php
require '../vendor/autoload.php';

use AltoRouter;
use Utils\ErrorHandler;
use Utils\ResponseHandler;

$router = new AltoRouter();

// Rutas para la API

//* Tickets *//
$router->map('GET', '/tickets', 'TicketController#index');
$router->map('GET', '/tickets/[i:id]', 'TicketController#show');
$router->map('POST', '/tickets', 'TicketController#store');
$router->map('PUT', '/tickets/[i:id]', 'TicketController#update');
$router->map('DELETE', '/tickets/[i:id]', 'TicketController#destroy');
$router->map('PATCH', '/tickets/[i:id]/estado', 'TicketController#cambiarEstado');
//$router->map('GET', '/tickets/[i:id]/reporte', 'TicketController#generarReporte');
//$router->map('PATCH', '/tickets/[i:id]/asignar', 'TicketController#asignarTecnico');
//$router->map('GET', '/clientes/[i:id]/tickets', 'TicketController#ticketsPorCliente');

// Manejo de rutas
$match = $router->match();
if ($match && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']); 
} else {
    ErrorHandler::notFound();
}