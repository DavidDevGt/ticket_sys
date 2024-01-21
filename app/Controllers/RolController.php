<?php
require_once 'Controller.php';
require_once '../Models/Rol.php';

// Controlador específico para 'Rol'
class RolController extends Controller {
    public function __construct()
    {
        $this->model = new Rol();
    }
}
