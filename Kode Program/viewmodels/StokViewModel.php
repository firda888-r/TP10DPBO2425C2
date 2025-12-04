<?php
require_once 'models/Stok.php';

class StokViewModel
{
    private $stok;

    public function __construct()
    {
        $this->stok = new Stok();
    }

    // Ambil semua stok
    public function getStokList()
    {
        return $this->stok->getAll();
    }

    // Ambil stok berdasarkan ID
    public function getStokById($id_stok)
    {
        return $this->stok->getById($id_stok);
    }

    // Tambah stok baru
    public function addStok($id_barang, $jumlah_stok, $status)
    {
        return $this->stok->create($id_barang, $jumlah_stok, $status);
    }

    // Update stok
    public function updateStok($id_stok, $id_barang, $jumlah_stok, $status)
    {
        return $this->stok->update($id_stok, $id_barang, $jumlah_stok, $status);
    }

    // Hapus stok
    public function deleteStok($id_stok)
    {
        return $this->stok->delete($id_stok);
    }
}
