<?php
require_once 'models/Pegawai.php';

class PegawaiViewModel
{
    private $pegawai;

    public function __construct()
    {
        $this->pegawai = new Pegawai();
    }

    public function getPegawaiList()
    {
        return $this->pegawai->getAll();
    }

    public function getPegawaiById($id_pegawai)
    {
        return $this->pegawai->getById($id_pegawai);
    }

    public function addPegawai($nama_pegawai, $jadwal_shift)
    {
        return $this->pegawai->create($nama_pegawai, $jadwal_shift);
    }

    public function updatePegawai($id_pegawai, $nama_pegawai, $jadwal_shift)
    {
        return $this->pegawai->update($id_pegawai,  $nama_pegawai, $jadwal_shift);
    }

    public function deletePegawai($id_pegawai)
    {
        return $this->pegawai->delete($id_pegawai);
    }
}
