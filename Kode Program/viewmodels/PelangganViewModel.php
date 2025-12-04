<?php
require_once 'models/Pelanggan.php';

class PelangganViewModel
{
    private $pelanggan;

    public function __construct()
    {
        $this->pelanggan = new Pelanggan();
    }

    public function getPelangganList()
    {
        return $this->pelanggan->getAll();
    }

    public function getPelangganById($id_pelanggan)
    {
        return $this->pelanggan->getById($id_pelanggan);
    }

    public function addPelanggan($id_barang, $id_pegawai, $nama_pelanggan, $total_harga_sewa, $tanggal, $tanggal_kembali)
    {
        return $this->pelanggan->create($id_barang, $id_pegawai, $nama_pelanggan, $total_harga_sewa, $tanggal, $tanggal_kembali);
    }

    public function updatePelanggan($id_pelanggan, $id_barang, $id_pegawai, $nama_pelanggan, $total_harga_sewa, $tanggal, $tanggal_kembali)
    {
        return $this->pelanggan->update($id_pelanggan, $id_barang, $id_pegawai, $nama_pelanggan, $total_harga_sewa, $tanggal, $tanggal_kembali);
    }

    public function deletePelanggan($id_pelanggan)
    {
        return $this->pelanggan->delete($id_pelanggan);
    }
}
