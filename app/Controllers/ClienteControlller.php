<?php
require_once 'Controller.php';
require_once '../Models/Cliente.php';

class ClienteControlller extends Controller
{
    public function __construct()
    {
        parent::__construct(new Cliente());
    }
}
