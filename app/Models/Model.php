<?php
abstract class Model
{
    protected $conn;
    protected $table;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function getAll()
    {
        $query = "SELECT * FROM " . $this->table;
        $result = $this->conn->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // Otros métodos podrían ser: (save, update, delete)

    public function save($data)
    {
        $fields = implode(', ', array_keys($data));
        $values = implode(", ", array_map(function ($value) {
            return "'" . $this->conn->real_escape_string($value) . "'";
        }, array_values($data)));
        $query = "INSERT INTO {$this->table} ($fields) VALUES ($values)";
        return $this->conn->query($query);
    }

    public function update($id, $data)
    {
        $fields = implode(", ", array_map(function ($key, $value) {
            return "$key = '" . $this->conn->real_escape_string($value) . "'";
        }, array_keys($data), array_values($data)));
        $query = "UPDATE {$this->table} SET $fields WHERE id = $id";
        return $this->conn->query($query);
    }

    public function delete($id)
    {
        $query = "UPDATE {$this->table} SET active = false WHERE id = $id";
        return $this->conn->query($query);
    }
}
