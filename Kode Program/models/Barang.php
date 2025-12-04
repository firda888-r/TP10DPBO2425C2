<?php
require_once "config/Database.php";

class Barang
{
    private $conn;
    private $table = "barang";

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

    public function getById($id_barang)
    {
        $query = "SELECT * FROM " . $this->table . " WHERE id_barang = :id_barang";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_barang',  $id_barang);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($nama_barang, $harga_sewa)
    {
        $query = "INSERT INTO " . $this->table . "(nama_barang, harga_sewa) VALUES (:nama_barang, :harga_sewa)";
        $stmt = $this->conn->prepare($query);
        // Bind parameters
        $stmt->bindParam(':nama_barang', $nama_barang);
        $stmt->bindParam(':harga_sewa', $harga_sewa);    
        return $stmt->execute();
    }

    public function update($id_barang, $nama_barang, $harga_sewa)
    {
        $query = "UPDATE " . $this->table . " SET id_barang = :id_barang, nama_barang = :nama_barang, harga_sewa = :harga_sewa  WHERE id_barang = :id_barang";
        $stmt = $this->conn->prepare($query);
        // Bind parameters
        $stmt->bindParam(':id_barang', $id_barang);
        $stmt->bindParam(':nama_barang', $nama_barang);
        $stmt->bindParam(':harga_sewa', $harga_sewa);        
        return $stmt->execute();
    }

    public function delete($id_barang)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id_barang = :id_barang";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_barang', $id_barang);
        return $stmt->execute();
    }
}
