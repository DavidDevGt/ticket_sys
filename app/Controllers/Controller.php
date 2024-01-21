<?php
// Clase base para todos los controladores
class Controller {
    protected $model;

    // Método constructor para asignar un modelo
    public function __construct($model) {
        $this->model = $model;
    }

    // Métodos genéricos que podrían ser utilizados por los controladores
    // Ejemplo: public function index() { ... }
}
