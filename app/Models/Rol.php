<?php
require_once 'Model.php';

// Clase Rol que extiende de Model
class Rol extends Model
{
    protected $table = 'rol';

    private $id;
    private $nombre;
    private $descripcion;
    private $active;

    // Constructor
    public function __construct($nombre = '', $descripcion = '', $active = true)
    {
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
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

    public function getDescripcion()
    {
        return $this->descripcion;
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

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function setActive($active)
    {
        $this->active = $active;
    }

    // Métodos específicos para el modelo Rol
    public function guardar()
    {
        $data = [
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'active' => $this->active
        ];
        return $this->save($data);
    }

    public function actualizar($id)
    {
        $data = [
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'active' => $this->active
        ];
        return $this->update($id, $data);
    }

    public function eliminar($id)
    {
        return $this->delete($id);
    }
}
