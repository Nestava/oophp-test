<?php

class Database {
    private $host = "localhost",
            $username = "root",
            $password = "",
            $db = "oop";

    protected $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db);

        if ($this->conn->connect_errno) {
            die("Koneksi Gagal:" . $this->conn->connect_error);
        }
    }
}

