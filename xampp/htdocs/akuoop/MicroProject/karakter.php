<?php

require_once 'database.php';

class Karakter extends Database{
    protected $nama, 
              $asal, 
              $tipePesona,
              $tipe;

    public function tambah($nama, $asal, $tipePesona, $tipe) {
        $this->nama = $nama;
        $this->tipePesona = $tipePesona;
        $this->asal = $asal;
        $this->tipe = $tipe;

        $maxId = $this->conn->query("SELECT max(id) AS max_id FROM halu");
        $fetchMaxID = $maxId->fetch_assoc();

        if ( $fetchMaxID['max_id'] > 1000 ) {
            $id = $fetchMaxID['max_id'] + 1;
        } else if ( $fetchMaxID['max_id'] < 1000 ) {
            $id = 1000;
        }

        $this->conn->query("INSERT INTO halu (id, nama, asal, tipe_pesona, tipe) VALUES ($id, '$this->nama',  '$this->asal', '$this->tipePesona', '$this->tipe');");
    }

    public function tampilkan() {
        $sql = $this->conn->query("SELECT * FROM halu ORDER BY id DESC");
        $fetch = $sql->fetch_assoc();
        $data = [];
        $data[] = $fetch;

        return $data;
    }
}