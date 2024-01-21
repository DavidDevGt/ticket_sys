<?php
class Database {
    private $host = 'localhost';
    private $db_name = 'ticket_sys_db';
    private $username = 'root';
    private $password = '';
    private $conn;

    public function connect() {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);

        if ($this->conn->connect_error) {
            die('Error de conexión: ' . $this->conn->connect_error);
        }

        return $this->conn;
    }

    public function dbQuery($query) {
        return $this->conn->query($query);
    }

    public function dbFetchAssoc($result) {
        return $result->fetch_assoc();
    }

    public function dbQuery_insert($query) {
        $this->conn->query($query);
        return $this->conn->insert_id;
    }
}
