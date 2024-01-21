<?php
require_once 'Controller.php';
require_once '../Models/Ticket.php';

class TicketController extends Controller
{
    public function __construct()
    {
        parent::__construct(new Ticket());
    }

    private function esEstadoValido($estado)
    {
        $estadosValidos = [1, 2, 3, 4, 5]; // Lista de estados válidos
        return in_array($estado, $estadosValidos);
    }

    public function cambiarEstado($id, $nuevoEstado)
    {
        $ticket = $this->model->getById($id);
        if (!$ticket) {
            return false; // Ticket no encontrado
        }

        // Validar que el nuevo estado sea válido
        if (!$this->esEstadoValido($nuevoEstado)) {
            return false; // Estado no válido
        }

        // TODO: Agregar lógica para verificar transiciones de estado permitidas

        // Actualizar el estado del ticket
        $actualizado = $this->model->update($id, ['estado' => $nuevoEstado]);

        return $actualizado;
    }

    public function generarReporte()
    {
        // TODO: Agregar lógica para generar un reporte, por ejemplo:
        // 1. Obtener todos los tickets abiertos y cerrados del mes, semana, día, etc.
        // 2. Ver el tiempo promedio de respuesta de los tickets
        // 3. Ver el tiempo promedio de resolución de los tickets
    }

    public function asignarTecnico($idTicket, $idTecnico)
    {
        // TODO: Agregar lógica para asignar el ticket a un técnico (SOLO ADMIN)
    }


    public function ticketsPorCliente($idCliente)
    {
        // TODO: Agregar lógica para obtener los tickets de un cliente
    }
}
