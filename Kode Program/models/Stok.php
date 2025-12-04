<?php
require_once "config/Database.php";

class Stok
{
    private $conn;
    private $table = "stok";

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    // === READ ALL ===
   public function getAll()
{
    $query = "
        SELECT stok.*, barang.nama_barang 
        FROM stok
        INNER JOIN barang ON stok.id_barang = barang.id_barang
    ";

    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


    // === GET BY ID ===
    public function getById($id_stok)
{
    $query = "
        SELECT stok.*, barang.nama_barang
        FROM stok
        INNER JOIN barang ON stok.id_barang = barang.id_barang
        WHERE stok.id_stok = ?
    ";

    $stmt = $this->conn->prepare($query);
    $stmt->execute([$id_stok]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}


    // === CREATE ===
    public function create($id_barang, $jumlah_stok, $status)
    {
        $query = "INSERT INTO " . $this->table . " 
                 (id_barang, jumlah_stok, status) 
                 VALUES (:id_barang, :jumlah_stok, :status)";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id_barang', $id_barang);
        $stmt->bindParam(':jumlah_stok', $jumlah_stok);
        $stmt->bindParam(':status', $status);

        return $stmt->execute();
    }

    // === UPDATE ===
    public function update($id_stok, $id_barang, $jumlah_stok, $status)
    {
        $query = "UPDATE " . $this->table . "
                     SET id_barang = :id_barang,
                         jumlah_stok = :jumlah_stok,
                         status = :status
                   WHERE id_stok = :id_stok";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id_stok', $id_stok);
        $stmt->bindParam(':id_barang', $id_barang);
        $stmt->bindParam(':jumlah_stok', $jumlah_stok);
        $stmt->bindParam(':status', $status);

        return $stmt->execute();
    }

    // === DELETE ===
    public function delete($id_stok)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id_stok = :id_stok";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_stok', $id_stok);

        return $stmt->execute();
    }
}
