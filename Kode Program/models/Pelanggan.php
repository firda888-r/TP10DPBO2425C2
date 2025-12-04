<?php
require_once "config/Database.php";

class Pelanggan
{
    private $conn;
    private $table = "pelanggan";

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

    public function getById($id_pelanggan)
    {
        $query = "SELECT * FROM " . $this->table . " WHERE id_pelanggan = :id_pelanggan";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_pelanggan',  $id_pelanggan);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($id_barang, $id_pegawai, $nama_pelanggan, $total_harga_sewa, $tanggal, $tanggal_kembali)
    {
        $query = "INSERT INTO " . $this->table . "(id_barang, id_pegawai, nama_pelanggan, total_harga_sewa, tanggal, tanggal_kembali) VALUES (:id_barang, :id_pegawai, :nama_pelanggan, :total_harga_sewa, :tanggal, :tanggal_kembali)";
        $stmt = $this->conn->prepare($query);
        // Bind parameters
        $stmt->bindParam(':id_barang', $id_barang);
        $stmt->bindParam(':id_pegawai', $id_pegawai);
        $stmt->bindParam(':nama_pelanggan', $nama_pelanggan);
        $stmt->bindParam(':total_harga_sewa', $total_harga_sewa);
        $stmt->bindParam(':tanggal', $tanggal);
        $stmt->bindParam(':tanggal_kembali', $tanggal_kembali);      
        return $stmt->execute();
    }

    public function update($id_pelanggan, $id_barang, $id_pegawai, $nama_pelanggan, $total_harga_sewa, $tanggal, $tanggal_kembali)
    {
        $query = "UPDATE " . $this->table . " SET id_barang = :id_barang, id_pegawai = :id_pegawai, nama_pelanggan = :nama_pelanggan, total_harga_sewa = :total_harga_sewa, tanggal = :tanggal, tanggal_kembali = :tanggal_kembali WHERE id_pelanggan = :id_pelanggan";
        $stmt = $this->conn->prepare($query);
        // Bind parameters
        $stmt->bindParam(':id_pelanggan', $id_pelanggan);
        $stmt->bindParam(':id_barang', $id_barang);
        $stmt->bindParam(':id_pegawai', $id_pegawai);
        $stmt->bindParam(':nama_pelanggan', $nama_pelanggan);
        $stmt->bindParam(':total_harga_sewa', $total_harga_sewa);
        $stmt->bindParam(':tanggal', $tanggal);
        $stmt->bindParam(':tanggal_kembali', $tanggal_kembali);        
        return $stmt->execute();
    }

    public function delete($id_pelanggan)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id_pelanggan = :id_pelanggan";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_pelanggan', $id_pelanggan);
        return $stmt->execute();
    }
}
