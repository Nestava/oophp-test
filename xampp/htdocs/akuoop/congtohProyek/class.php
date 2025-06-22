<?php
class Database {
    private $host = "localhost";
    private $user = "root";      // ganti sesuai servermu
    private $pass = "";          // ganti kalau pakai password
    private $db   = "perpustakaan";
    protected $conn;

    public function __construct() {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);

        if ($this->conn->connect_error) {
            die("Koneksi gagal: " . $this->conn->connect_error);
        }
    }
}

class Buku extends Database {
    public function tambah($judul, $penulis, $tahun) {
        $judul   = $this->conn->real_escape_string($judul);
        $penulis = $this->conn->real_escape_string($penulis);
        $tahun   = (int)$tahun;

        $sql = "INSERT INTO buku (judul, penulis, tahun) VALUES ('$judul', '$penulis', $tahun)";
        $this->conn->query($sql);
    }

    public function tampilkanSemua() {
        $sql = "SELECT * FROM buku ORDER BY id DESC";
        $result = $this->conn->query($sql);
        $data = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }

        return $data;
    }
}
?>