<?php
require_once 'viewmodels/PelangganViewModel.php';
require_once 'viewmodels/BarangViewModel.php';
require_once 'viewmodels/PegawaiViewModel.php';
require_once 'viewmodels/StokViewModel.php';

$entity = isset($_GET['entity']) ? $_GET['entity'] : 'pelanggan';
$action = isset($_GET['action']) ? $_GET['action'] : 'list';

if ($entity === 'pelanggan') {
    $pelangganVM = new PelangganViewModel();

    switch ($action) {

        // TAMPILKAN LIST
        case 'list':
            $pelangganList = $pelangganVM->getPelangganList();
            require_once 'view/pelanggan_list.php';
            break;

        // FORM TAMBAH
        case 'add':
            require_once 'view/pelanggan_form.php';
            break;

        // FORM EDIT
        case 'edit':
            $id_pelanggan = $_GET['id'];
            $pelanggan = $pelangganVM->getPelangganById($id_pelanggan);
            require_once 'view/pelanggan_form.php';
            break;

        // SIMPAN DATA BARU
        case 'save':
            $id_barang = $_POST['id_barang'];
            $id_pegawai = $_POST['id_pegawai'];
            $nama_pelanggan = $_POST['nama_pelanggan'];
            $total_harga_sewa = $_POST['total_harga_sewa'];
            $tanggal = $_POST['tanggal'];
            $tanggal_kembali = $_POST['tanggal_kembali'];

            $pelangganVM->addPelanggan($id_barang, $id_pegawai, $nama_pelanggan, $total_harga_sewa, $tanggal, $tanggal_kembali);
            header('Location: index.php?entity=pelanggan&action=list');
            break;

        // UPDATE DATA
        case 'update':
            $id_pelanggan = $_GET['id_pelanggan'];
            $id_barang = $_POST['id_barang'];
            $id_pegawai = $_POST['id_pegawai'];
            $nama_pelanggan = $_POST['nama_pelanggan'];
            $total_harga_sewa = $_POST['total_harga_sewa'];
            $tanggal = $_POST['tanggal'];
            $tanggal_kembali = $_POST['tanggal_kembali'];

            $pelangganVM->updatePelanggan($id_pelanggan, $id_barang, $id_pegawai, $nama_pelanggan, $total_harga_sewa, $tanggal, $tanggal_kembali);
            header('Location: index.php?entity=pelanggan&action=list');
            break;

        // HAPUS DATA
        case 'delete':
            $id_pelanggan = $_GET['id'];
            $pelangganVM->deletePelanggan($id_pelanggan);
            header('Location: index.php?entity=pelanggan&action=list');
            break;
        default:
        echo "Invalid action.";
        break;    
    }
} else if ($entity === 'barang') {
    $barangVM = new BarangViewModel();

    switch ($action) {

        // TAMPILKAN LIST
        case 'list':
            $barangList = $barangVM->getBarangList();
            require_once 'view/barang_list.php';
            break;

        // FORM TAMBAH
        case 'add':
            require_once 'view/barang_form.php';
            break;

        // FORM EDIT
        case 'edit':
            $id_barang = $_GET['id'];
            $barang= $barangVM->getBarangById($id_barang);
            require_once 'view/barang_form.php';
            break;

        // SIMPAN DATA BARU
       case 'save':
            $nama_barang = $_POST['nama_barang'];
            $harga_sewa = $_POST['harga_sewa'];

            $barangVM->addBarang($nama_barang, $harga_sewa);
            header('Location: index.php?entity=barang&action=list');
            break;

        // UPDATE DATA
        case 'update':
            $id_barang = $_POST['id_barang'];
            $nama_barang = $_POST['nama_barang'];
            $harga_sewa = $_POST['harga_sewa'];

            $barangVM->updateBarang($id_barang, $nama_barang, $harga_sewa);
            header('Location: index.php?entity=barang&action=list');
            break;

        // HAPUS DATA
        case 'delete':
            $id_barang = $_GET['id'];
            $barangVM->deleteBarang($id_barang);
            header('Location: index.php?entity=barang&action=list');
            break;
    
        default:
            echo "Invalid action for barang.";
            break;
    }
} else if ($entity === 'pegawai') {
    $pegawaiVM = new PegawaiViewModel();
    switch ($action) {

        // TAMPILKAN LIST
        case 'list':
            $pegawaiList = $pegawaiVM->getPegawaiList();
            require_once 'view/pegawai_list.php';
            break;

        // FORM TAMBAH
        case 'add':
            require_once 'view/pegawai_form.php';
            break;

        // FORM EDIT
        case 'edit':
            $id_pegawai = $_GET['id'];
            $pegawai= $pegawaiVM->getPegawaiById($id_pegawai);
            require_once 'view/pegawai_form.php';
            break;

        // SIMPAN DATA BARU
       case 'save':
            $nama_pegawai = $_POST['nama_pegawai'];
            $jadwal_shift = $_POST['jadwal_shift'];

            $pegawaiVM->addPegawai($nama_pegawai, $jadwal_shift);
            header('Location: index.php?entity=pegawai&action=list');
            break;

        // UPDATE DATA
        case 'update':
            $id_pegawai = $_POST['id_pegawai'];
            $nama_pegawai = $_POST['nama_pegawai'];
            $jadwal_shift = $_POST['jadwal_shift'];

            $pegawaiVM->updatePegawai($id_pegawai, $nama_pegawai, $jadwal_shift);
            header('Location: index.php?entity=pegawai&action=list');
            break;

        // HAPUS DATA
        case 'delete':
            $id_pegawai = $_GET['id'];
            $pegawaiVM->deletePegawai($id_pegawai);
            header('Location: index.php?entity=pegawai&action=list');
            break;
    
        default:
            echo "Invalid action for pegawai.";
            break;
    }
}else if ($entity === 'stok') {
    require_once 'viewmodels/BarangViewModel.php';
    $barangVM = new BarangViewModel();
    $barangList = $barangVM->getBarangList();

    $stokVM = new StokViewModel();

    switch ($action) {

        // TAMPILKAN LIST
        case 'list':
            $stokList = $stokVM->getStokList();
            require_once 'view/stok_list.php';
            break;

        // FORM TAMBAH
        case 'add':
            require_once 'view/stok_form.php';
            break;

        // FORM EDIT
        case 'edit':
            $id_stok = $_GET['id'];
            $stok = $stokVM->getStokById($id_stok);
            require_once 'view/stok_form.php';
            break;

        // SIMPAN DATA BARU
        case 'save':
            $id_barang = $_POST['id_barang'];
            $jumlah_stok = $_POST['jumlah_stok'];
            $status = $_POST['status'];

            $stokVM->addStok($id_barang, $jumlah_stok, $status);
            header('Location: index.php?entity=stok&action=list');
            break;

        // UPDATE DATA
        case 'update':
            $id_stok = $_POST['id_stok'];
            $id_barang = $_POST['id_barang'];
            $jumlah_stok = $_POST['jumlah_stok'];
            $status = $_POST['status'];

            $stokVM->updateStok($id_stok, $id_barang, $jumlah_stok, $status);
            header('Location: index.php?entity=stok&action=list');
            break;

        // HAPUS DATA
        case 'delete':
            $id_stok = $_GET['id'];
            $stokVM->deleteStok($id_stok);
            header('Location: index.php?entity=stok&action=list');
            break;

        default:
            echo "Invalid action for stok.";
            break;
    }

}else {
    echo "Invalid Entity.";
}
