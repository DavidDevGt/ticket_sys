<?php
require_once 'Model.php';

class Ticket extends Model
{
    protected $table = 'ticket';

    private $id;
    private $titulo;
    private $descripcion;
    private $cliente_id;
    private $estado;
    private $fecha_creacion;
    private $fecha_edicion;
    private $usuario_creacion_id;
    private $usuario_edicion_id;
    private $active;

    public function __construct($titulo, $descripcion, $cliente_id, $estado = 1, $usuario_creacion_id, $active = true) {
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->cliente_id = $cliente_id;
        $this->estado = $estado;
        $this->usuario_creacion_id = $usuario_creacion_id;
        $this->active = $active;
    }

}