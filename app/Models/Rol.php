<?php

class Rol
{
    private $id;
    private $nombre;
    private $descripcion;
    private $active;

    public function __construct($nombre, $descripcion, $active = true)
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
}
