<?php
require_once 'Model.php';
require_once 'Rol.php';

class Usuario extends Model
{
    protected $table = 'usuario';

    private $id;
    private $nombre;
    private $correo;
    private $contrasena;
    private $rol_id;
    private $fecha_creacion;
    private $fecha_edicion;
    private $usuario_edicion_id;
    private $active;

    private $rol; // Objeto Rol


    public function __construct($nombre = '', $correo = '', $contrasena = '', $rol_id = 1, $active = true) {
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->contrasena = $contrasena;
        $this->rol_id = $rol_id;
        $this->active = $active;
        $this->rol = $this->getRol(); // Obtiene el rol al crear el usuario
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

    public function getCorreo()
    {
        return $this->correo;
    }

    public function getContrasena()
    {
        return $this->contrasena;
    }

    public function getRolId()
    {
        return $this->rol_id;
    }

    public function getFechaCreacion()
    {
        return $this->fecha_creacion;
    }

    public function getFechaEdicion()
    {
        return $this->fecha_edicion;
    }

    public function getUsuarioEdicionId()
    {
        return $this->usuario_edicion_id;
    }

    public function isActive()
    {
        return $this->active;
    }

    public function getRol() {
        $rolModel = new Rol();
        return $rolModel->getById($this->rol_id);
    }

    // Setters
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setCorreo($correo)
    {
        $this->correo = $correo;
    }

    public function setContrasena($contrasena)
    {
        $this->contrasena = $contrasena;
    }

    public function setRolId($rol_id)
    {
        $this->rol_id = $rol_id;
    }

    public function setFechaCreacion($fecha_creacion)
    {
        $this->fecha_creacion = $fecha_creacion;
    }

    public function setFechaEdicion($fecha_edicion)
    {
        $this->fecha_edicion = $fecha_edicion;
    }

    public function setUsuarioEdicionId($usuario_edicion_id)
    {
        $this->usuario_edicion_id = $usuario_edicion_id;
    }

    public function setActive($active)
    {
        $this->active = $active;
    }

    // Métodos específicos para el modelo Usuario
    public function guardar()
    {
        $data = [
            'nombre' => $this->nombre,
            'correo' => $this->correo,
            'contrasena' => $this->contrasena,
            'rol_id' => $this->rol_id,
            'active' => $this->active
        ];
        return $this->save($data);
    }

    public function actualizar($id)
    {
        $data = [
            'nombre' => $this->nombre,
            'correo' => $this->correo,
            'contrasena' => $this->contrasena,
            'rol_id' => $this->rol_id,
            'active' => $this->active
        ];
        return $this->update($id, $data);
    }

    public function eliminar($id)
    {
        return $this->delete($id);
    }

    public function findByMail($correo)
    {
        $query = "SELECT * FROM {$this->table} WHERE correo = '" . $this->conn->real_escape_string($correo) . "'";
        $result = $this->conn->query($query);
        return $result->fetch_object();
    }
}
