<?php
require_once 'Controller.php';
require_once '../Models/Rol.php';

class RolController extends Controller
{
    public function __construct()
    {
        parent::__construct(new Rol());
    }
}
