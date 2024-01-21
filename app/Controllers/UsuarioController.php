<?php
require_once 'Controller.php';
require_once '../Models/Usuario.php';

use Config\Session;

class UsuarioController extends Controller
{
    public function __construct()
    {
        parent::__construct(new Usuario());
    }

    public function login($correo, $contrasena) {
        $usuario = $this->model->findByMail($correo);

        if ($usuario && password_verify($contrasena, $usuario->getContrasena())) {
            session_regenerate_id(); // Regenerar el ID de sesión en el login exitoso
            
            Session::set('usuario_id', $usuario->getId());
            Session::set('usuario_rol', $usuario->getRolId());


            return true;
        }
        return false;
    }

    public function logout() {
        Session::destroy();
    }
}
