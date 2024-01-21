<?php
// Clase base para todos los controladores
class Controller
{
    protected $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    // Método para obtener todos los registros
    public function index()
    {
        return $this->model->getAll();
    }

    // Método para mostrar un único registro basado en un ID
    public function show($id)
    {
        return $this->model->getById($id);
    }

    // Método para guardar un nuevo registro
    public function store($data)
    {
        return $this->model->save($data);
    }

    // Método para actualizar un registro existente
    public function update($id, $data)
    {
        return $this->model->update($id, $data);
    }

    // Método para eliminar un registro
    public function destroy($id)
    {
        return $this->model->delete($id);
    }
}
