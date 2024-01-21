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

    // Getters
    public function getId()
    {
        return $this->id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }
    
    public function isActive()
    {
        return $this->active;
    }

    // Setters
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    public function setActive($active)
    {
        $this->active = $active;
    }

    // Métodos específicos para el modelo Cliente
    public function guardar()
    {
        $data = [
            'nombre' => $this->nombre,
            'direccion' => $this->direccion,
            'telefono' => $this->telefono,
            'active' => $this->active
        ];
        return $this->save($data);
    }

    public function actualizar($id)
    {
        $data = [
            'nombre' => $this->nombre,
            'direccion' => $this->direccion,
            'telefono' => $this->telefono,
            'active' => $this->active
        ];
        return $this->update($id, $data);
    }

    public function eliminar($id)
    {
        return $this->delete($id);
    }
}
