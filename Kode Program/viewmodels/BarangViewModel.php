<?php
require_once 'models/Barang.php';

class BarangViewModel
{
    private $barang;

    public function __construct()
    {
        $this->barang = new Barang();
    }

    public function getBarangList()
    {
        return $this->barang->getAll();
    }

    public function getBarangById($id_barang)
    {
        return $this->barang->getById($id_barang);
    }

    public function addBarang($nama_barang, $harga_sewa)
    {
        return $this->barang->create($nama_barang, $harga_sewa);
    }

    public function updateBarang($id_barang, $nama_barang, $harga_sewa)
    {
        return $this->barang->update($id_barang,  $nama_barang, $harga_sewa);
    }

    public function deleteBarang($id_barang)
    {
        return $this->barang->delete($id_barang);
    }
}
