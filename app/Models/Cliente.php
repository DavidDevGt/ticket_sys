<?php
require_once 'Model.php';

class Cliente extends Model
{
    protected $table = 'cliente';

    private $id;
    private $nombre;
    private $direccion;
    private $telefono;
    private $fecha_creacion;
    private $fecha_edicion;
    private $usuario_edicion_id;
    private $active;

    public function __construct($nombre, $direccion = '', $telefono = '', $active = true)
    {
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->active = $active;
    }
}
