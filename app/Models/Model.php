<?php
abstract class Model {
    protected $conn;
    protected $table;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getAll() {
        $query = "SELECT * FROM " . $this->table;
        $result = $this->conn->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // Otros métodos podrían ser: (save, update, delete)
}
