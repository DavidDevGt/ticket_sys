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

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getClienteId() {
        return $this->cliente_id;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function getFechaCreacion() {
        return $this->fecha_creacion;
    }

    public function getFechaEdicion() {
        return $this->fecha_edicion;
    }

    public function getUsuarioCreacionId() {
        return $this->usuario_creacion_id;
    }

    public function getUsuarioEdicionId() {
        return $this->usuario_edicion_id;
    }

    public function isActive() {
        return $this->active;
    }

    // Setters
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function setClienteId($cliente_id) {
        $this->cliente_id = $cliente_id;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }

    public function setFechaCreacion($fecha_creacion) {
        $this->fecha_creacion = $fecha_creacion;
    }

    public function setFechaEdicion($fecha_edicion) {
        $this->fecha_edicion = $fecha_edicion;
    }

    public function setUsuarioCreacionId($usuario_creacion_id) {
        $this->usuario_creacion_id = $usuario_creacion_id;
    }

    public function setUsuarioEdicionId($usuario_edicion_id) {
        $this->usuario_edicion_id = $usuario_edicion_id;
    }

    public function setActive($active) {
        $this->active = $active;
    }
}