<?php
require_once "config/Database.php";

class Pegawai
{
    private $conn;
    private $table = "pegawai";

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getAll()
    {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id_pegawai)
    {
        $query = "SELECT * FROM " . $this->table . " WHERE id_pegawai = :id_pegawai";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_pegawai',  $id_pegawai);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($nama_pegawai, $jadwal_shift)
    {
        $query = "INSERT INTO " . $this->table . "(nama_pegawai, jadwal_shift) VALUES (:nama_pegawai, :jadwal_shift)";
        $stmt = $this->conn->prepare($query);
        // Bind parameters
        $stmt->bindParam(':nama_pegawai', $nama_pegawai);
        $stmt->bindParam(':jadwal_shift', $jadwal_shift);    
        return $stmt->execute();
    }

    public function update($id_pegawai, $nama_pegawai, $jadwal_shift)
    {
        $query = "UPDATE " . $this->table . "
                SET nama_pegawai = :nama_pegawai,
                    jadwal_shift = :jadwal_shift
                WHERE id_pegawai = :id_pegawai";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id_pegawai', $id_pegawai);
        $stmt->bindParam(':nama_pegawai', $nama_pegawai);
        $stmt->bindParam(':jadwal_shift', $jadwal_shift);

        return $stmt->execute();
    }


    public function delete($id_pegawai)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id_pegawai = :id_pegawai";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_pegawai', $id_pegawai);
        return $stmt->execute();
    }
}
